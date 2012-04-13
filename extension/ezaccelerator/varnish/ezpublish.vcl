###
#
# @author Sebastien Morel <s.morel@novactive.com>
# @copyright Copyright 2011 (c) Novactive. All rights reserved.
# @license eZ Proprietary Extension License (PEL), Version 1.3
# @version 1.3-1
#
##

#Varnish 3.0 - Exemple of VCL for eZ Publish

backend web1 {
	.host = "localhost";
	.port = "80";
	.probe = {
		.url = "/";
                .interval = 3s;
                .window = 5;
                .threshold = 2;
        	}
	}

director www_director random {
	{
		.backend = web1;
		.weight = 1;
	}
}

acl debuggers {
    "localhost";
    "192.168.0.0"/16;
}

acl purgers {
    "localhost";
    "192.168.0.0"/16;
}


# called at the beginning of a request, after the complete request has been received
sub vcl_recv {

	# add a unique header containing the client address
	unset req.http.X-Forwarded-For;
	set req.http.X-Forwarded-For = client.ip;


	if (req.request == "BAN") {
		if (!client.ip ~ purgers) {
       			error 405 "Method not allowed";
       		}
       	
       		if (req.url ~ "^/node/") {
       			ban("obj.http.X-eznode == "+regsub(req.url, "^/node/", ""));
       			error 200 "Purge of objects connected to the node id("+regsub(req.url, "^/node/", "")+") done.";
       		}
       	
       		if (req.url ~ "^/url/") {
       			ban_url(regsub(req.url, "^/url/", ""));
       			error 200 "Purge of objects with url ("+regsub(req.url, "^/url/", "")+") done.";
       		}
	}


	# set the grace
	set req.grace = 6h;

	# set the backend
	set req.backend = www_director;

	# always cache these items:
	if (req.request == "GET" && req.url ~ "\.(gif|jpg|jpeg|bmp|png|tiff|tif|ico|img|tga|wmf)$") {
		return(lookup);
	}

	# various other content pages
	if (req.request == "GET" && req.url ~ "\.(css|js|html)$") {
		return(lookup);
	}

	# multimedia
	if (req.request == "GET" && req.url ~ "\.(svg|swf|ico|mp3|mp4|m4a|ogg|mov|avi|wmv)$") {
		return(lookup);
	}

	# do not cache these rules:
	
	# pass mode can't handle POST (yet) so use pipe
	if (req.request == "POST") {
		if (client.ip ~ debuggers) { set req.http.X-Debug = "Not Cached according to configuration (POST)"; }
		return(pass);
	}
	if (req.request != "GET" && req.request != "HEAD") {
		return(pipe);
	}
	if (req.http.Expect) {
		return(pipe);
	}
	if (req.http.Authenticate || req.http.Authorization) {
		if (client.ip ~ debuggers) { set req.http.X-Debug = "Not Cached according to configuration (Authorization)"; }
		return(pass);
	}

	# function to "normalize the Accept-Encoding headers"
	if (req.http.Accept-Encoding) {
		if (req.http.Accept-Encoding ~ "gzip") {
			set req.http.Accept-Encoding = "gzip";
		} elsif (req.http.Accept-Encoding ~ "deflate") {
			set req.http.Accept-Encoding = "deflate";
		} else {
			unset req.http.Accept-Encoding;
		}
	}

	# don't cache authenticated sessions
	if (req.http.Cookie && req.http.Cookie ~ "is_logged_in=" ) {
		if (client.ip ~ debuggers) { set req.http.X-Debug = "Not Cached according to configuration (is_logged_in)"; }
		return(pass);
	}

	# don't cache ezjscore request
	if (req.url ~ "ezjscore/call/") {
		if (client.ip ~ debuggers) { set req.http.X-Debug = "Not Cached according to configuration (ezjscore)"; }
		return(pass);
	}

	# don't cache version view
	if (req.url ~ "content/versionview")  {
		if (client.ip ~ debuggers) { set req.http.X-Debug = "Not Cached according to configuration (versionview)"; }
		return(pass);
	}

	# Varnish doesn't do INM requests so pass it through if no If-Modified-Since was sent
	if (req.http.If-None-Match && !req.http.If-Modified-Since) {
		if (client.ip ~ debuggers) { set req.http.X-Debug = "Not Cached according to configuration (Modified-Since)"; }
		return(pass);
	}

	# if it passes all these tests, do a lookup anyway;
	return(lookup);
}

# Called when the requested object has been retrieved from the
# backend, or the request to the backend has failed

sub vcl_fetch {

	# set the 6h ttl for the viewcache page (by default)
	if (beresp.http.X-eznode) {
    		set beresp.ttl = 6h;
	} else {
		set beresp.ttl = 30m;
	}

	# set the grace
	set beresp.grace = 6h;

	# Set the ttl funcion of Header software
	if( beresp.http.X-ttl ~ "s$"){ # seconds
         C{
                 char *ttl;
                 ttl = VRT_GetHdr(sp, HDR_BERESP, "\06X-ttl:"); // 6 == 6 chars
                 VRT_l_beresp_ttl(sp, atoi(ttl));
         }C
	} elseif ( beresp.http.X-ttl ~ "m$") { # minutes
         C{
                 char *ttl;
                 ttl = VRT_GetHdr(sp, HDR_BERESP, "\06X-ttl:"); // 6 == 6 chars
                 VRT_l_beresp_ttl(sp, atoi(ttl) * 60);
         }C
	} elseif ( beresp.http.X-ttl ~ "h$") { # hours
         C{
                 char *ttl;
                 ttl = VRT_GetHdr(sp, HDR_BERESP, "\06X-ttl:"); // 6 == 6 chars
                 VRT_l_beresp_ttl(sp, atoi(ttl) * 60 * 60);
         }C
	}

	# call esi
	if (!req.url ~ "\.(gif|jpg|swf|css|js|png|jpg|jpeg|gif|png|tiff|tif|svg|swf|ico|css|js|vsd|doc|ppt|pps|xls|mp3|mp4|m4a|ogg|mov|flv|avi|wmv|sxw|zip|gz|bz2|tgz|tar|rar|odc|odb|odf|odg|odi|odp|ods|odt|sxc|sxd|sxi|sxw|dmg|torrent|deb|msi|iso|rpm)$") {
		set beresp.do_esi = true;
	}
	
	set beresp.http.X-Debug-recv = req.http.X-Debug;
	
	if ( beresp.status == 500) {
		return(restart);
	}
	
	if (beresp.http.X-eZ-Publish == "isUsingStaleCache") {
		if (client.ip ~ debuggers) { set beresp.http.X-Debug-fetch = "Not Cached according to configuration (isUsingStaleCache)"; }
		set beresp.ttl = 10s;
		return(hit_for_pass);
	}

	# You are respecting the Cache-Control=private header from the backend
	if ( beresp.http.Cache-Control ~ "private") {
		if (client.ip ~ debuggers) { set beresp.http.X-Debug-fetch = "Not Cached according to configuration (Cache-Control)"; }
		set beresp.ttl = 0s;
		return(hit_for_pass);
	}

	if (req.request == "GET" && req.url ~ "\.(gif|jpg|jpeg|bmp|png|tiff|tif|ico|img|tga|wmf)$") {
		set beresp.ttl = 7d;
	}

	# various other content pages
	if (req.request == "GET" && req.url ~ "\.(css|js|html)$") {
		set beresp.ttl = 1d;
	}

	# multimedia
	if (req.request == "GET" && req.url ~ "\.(svg|swf|ico|mp3|mp4|m4a|ogg|mov|avi|wmv)$") {
		set beresp.ttl = 7d;
	}
	
	return(deliver);
}

/* Called before a cached object is delivered to the client */
sub vcl_deliver {
	if (client.ip ~ debuggers) {
		if (obj.hits > 0) {	
			set resp.http.X-Cache = "HIT";
			set resp.http.X-Cache-Hits = obj.hits;
		} else {
			set resp.http.X-Cache = "MISS";
		}
		set resp.http.WhoisCache = "eZAccelerator";
	}
	return(deliver);
}
	

# Called when entering pipe mode
sub vcl_pipe {
	return(pipe);
}

# Called when entering pass mode
sub vcl_pass {
	return(pass);
}

sub vcl_hash {
	hash_data(req.url);
	if (req.http.host) {
		hash_data(req.http.host);
	} else {
		hash_data(server.ip);
	}
	return (hash);
}

# Called when the requested object was found in the cache
sub vcl_hit {
	return(deliver);
}

# Called when the requested object was not found in the cache
sub vcl_miss {
	return(fetch);
}

sub vcl_deliver {
	return (deliver);
}

sub vcl_error {
	set obj.http.Content-Type = "text/html; charset=utf-8";
	
	if (obj.status != 200) {
		set obj.http.Retry-After = "5";
		synthetic {"
			<?xml version="1.0" encoding="utf-8"?><!doctype html><html lang="en"><head><title>"} +obj.status+""+obj.response+ {"</title><meta charset="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="description"content=""><meta name="keywords" content=""><style>html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}ins{background-color:#ff9;color:#000;text-decoration:none}mark{background-color:#ff9;color:#000;font-style:italic;font-weight:bold}del{text-decoration:line-through}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}table{border-collapse:collapse;border-spacing:0}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;clear:both;margin:0.75em 0;padding:0}input,select{vertical-align:middle}body{font:normal 13px/1.231 "Helvetica Neue", Helvetica, Arial, Geneva, Verdana, sans-serif;*font-size:small}h1,h2,h3,h4,h5,h6{font:bold 13px/1.231 "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif}h1{font-size:20px}h2{font-size:18px}h3{font-size:16px}h4{font-size:14px}h5{font-size:13px}h6{font-size:12px}select,input,button,textarea{font-size:99%}pre,code,kbd,samp,tt{font-family:"Courier New", Courier, monospace, sans-serif;*font-size:108%;line-height:100%}table{font-size:inherit;font:100%}body{background:#f5f5f5 repeat 0 0;color:#444;font-size:13px}h1,h2,h3,h4,h5,h6{font-weight:normal;margin:0 0 .25em 0}a{color:#004b84;cursor:pointer;text-decoration:none}a:hover,a:active{outline:none;text-decoration:underline}p{margin-bottom:10px}.msgOuterCtn{-moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;-khtml-border-radius:5px;border-radius:5px;-moz-background-clip:padding;-webkit-background-clip:padding;-o-background-clip:padding-box;-ms-background-clip:padding-box;-khtml-background-clip:padding-box;background-clip:padding-box;-moz-box-shadow:0 0 2px rgba(0, 0, 0, 0.1);-webkit-box-shadow:0 0 2px rgba(0, 0, 0, 0.1);-o-box-shadow:0 0 2px rgba(0, 0, 0, 0.1);box-shadow:0 0 2px rgba(0, 0, 0, 0.1);background:url("https://www.varnish-cache.org/sites/all/themes/varnish_cache/images/banner_1.png") #FFFDF8 50% 50% no-repeat;border:1px solid #DDD;margin:80px auto 0;padding:15px 25px;position:relative;text-align:left;width:660px;height:270px;}.msgOuterCtn .msgCtn{text-align:center;font-size:2.2em}.msgOuterCtn .msgCtn .numbers{font-size:2em;font-family:Georgia, Constantia, serif}.msgOuterCtn .msgCtn .small{font-size:0.6em}.msgOuterCtn .msgCtn .fixed-size{width:400px}.msgOuterCtn .msgCtn {clear: both;font-size: 2.2em;padding-left: 160px;text-align: center;}.msgOuterCtn .msgeZAcc {float: right;}.msgOuterCtn .logonova {margin-bottom:8px;}.msgOuterCtn .logovarnish {background: none repeat scroll 0 0 #296FB6;border-radius: 5px 5px 5px 5px;margin-left: 25px;padding: 0 10px;}p.message {font-size:0.9em;}p.xid {font-size:0.5em;}</style></head><body><div class="msgOuterCtn"><div class="msgeZAcc"><img class="logonova"src="http://www.novactive.com/extension/novactive/design/novactive/images/logo_novactive.png"alt="Novactive"/><img class="logovarnish"src="https://www.varnish-cache.org/sites/all/themes/varnish_cache/images/logo.png"width="140"alt="VarnishSoftware"/></div><div class="msgCtn"><h1 class="numbers">"} +obj.status+ {"</h1><p class="message">"} +obj.response+ {".</p><p class="xid">XID:"} +req.xid+ {"</p><a href="/" class="small">Back&raquo;</a></div></div></body></html>
		"};
	} else {
		synthetic {"
			##XML##
			<?xml version="1.0" encoding="utf-8"?>
			<eZAcceleratorPurgeResults>
				<content><![CDATA[
					"}+ obj.response + " (Code:"+obj.status+{")
				]]></content>
			</eZAcceleratorPurgeResults>
		"};
	}
	return (deliver);
}
