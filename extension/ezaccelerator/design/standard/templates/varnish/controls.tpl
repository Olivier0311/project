<div class="context-block">
{* DESIGN: Header START *}<div class="box-header"><div class="box-ml">
<h1 class="context-title"><a href="http://www.varnish-cache.org/" target="_blank"  class="float_right"><img src={"varnish.png"|ezimage} /></a>Varnish Controls</h1>
{* DESIGN: Mainline *}<div class="header-mainline"></div>
{* DESIGN: Header END *}</div></div>
{* DESIGN: Content START *}<div class="box-ml"><div class="box-mr"><div class="box-content">
<div id="varnish-control">
	{foreach $termresults as $varnishName=>$varnish}
		<h2>{$varnishName}</h2>
                <pre>{$varnish.Message|wash}</pre>
	{/foreach}
</div>
{* DESIGN: Content END *}</div></div></div>
</div>
