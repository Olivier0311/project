{varnish-init($module_result)}
{def  $ttl = ezini('EdgeSideIncludeSettings','DefaultTTL','ezaccelerator.ini')}
{if and(
		is_set($module_result.content_info),
		is_set($module_result.content_info.persistent_variable)
		is_set($module_result.content_info.persistent_variable.ttl)
	)}
	{set $ttl = $module_result.content_info.persistent_variable.ttl}
{/if}
<!--
        ESI Generated : {currentdate()|datetime( 'custom', '%H:%i %d %F %Y' )}
        TTL : {$ttl}
-->
{varnish-ttl($ttl)}
<div>{$module_result.content}</div>
{undef $ttl}
