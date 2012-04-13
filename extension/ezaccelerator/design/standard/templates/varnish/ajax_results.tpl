<div class="ezaccelerator-ajax_result">
	{if is_set($error)}
		 <div class="message-error">
	            <h2><span class="time">[{currentdate()|l10n( shortdatetime )}]</span>{$error|wash}</h2>
		</div>
	{/if}
	{if is_set($message)}
		 <div class="message-feedback">
	            <h2><span class="time">[{currentdate()|l10n( shortdatetime )}]</span>{$message|wash}</h2>
	              <p>{"Purge of %count nodes : "|i18n('extensioezacceleratorsh/messages','',hash('%count',$termresults|count))}</p>
	              <ul>
	              {foreach $termresults as $node_id=>$varnishsArray}
		              {def $n = fetch('content','node',hash('node_id',$node_id))}
		              	<li><strong><a href={$n.url_alias|ezurl}>/{$n.url_alias|wash}</a></strong><br />
		              		<ul>
		              		{foreach $varnishsArray as $varnish=>$res}
		              			<li><strong>{$varnish|wash}</strong> - <a href="#" class="viewdetailedresult">{"See more"|i18n('extensezacceleratornish/messages')}</a><br />
		              			<pre class="termresultdetails">{$res.Message|wash}</pre>
		              			</li>
		              		{/foreach}
		              		</ul>
		              	</li>
		              {undef $n}
	              {/foreach}
	              </ul>
		</div>
	{/if}
</div>