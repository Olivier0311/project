{if is_set($error)}
	 <div class="message-error">
            <h2><span class="time">[{currentdate()|l10n( shortdatetime )}]</span>{$error|wash}</h2>
	</div>
{/if}

{if is_set($message)}
	 <div class="message-feedback">
            <h2><span class="time">[{currentdate()|l10n( shortdatetime )}]</span>{$message|wash}</h2>
              <p>Purge <em>{$PurgeUrl|wash}</em>:</p>
              <ul>
              {foreach $termresults as $varnish=>$res}
              	<li>
              		<strong>{$varnish|wash}</strong><br />
              		<pre>{$res.Message|wash}</pre>
              	</li>
              {/foreach}
              </ul>
	</div>
{/if}
<div class="context-block">
{* DESIGN: Header START *}<div class="box-header"><div class="box-ml">
<h1 class="context-title"><a href="http://www.varnish-cache.org/" target="_blank"  class="float_right"><img src={"varnish.png"|ezimage} /></a>Varnish Purge</h1>
{* DESIGN: Mainline *}<div class="header-mainline"></div>
{* DESIGN: Header END *}</div></div>
{* DESIGN: Content START *}<div class="box-ml"><div class="box-mr"><div class="box-content">
<div id="varnish-purgeterm">
<br />
	<form method="POST" action="">
		<fieldset>
			<legend>{"Purge"|i18n('extension/ezaccelerator/messages')}</legend>
			<p><label>Url (regex): </label><input type='text' name="PurgeUrl" value="" /><br class="clear" /></p>
			{def $servers = ezini('VarnishServerList','Servers','ezaccelerator.ini')}
			{"Purge on :"|i18n('extension/ezaccelerator/messages')}<br class="clear" />
				<ul>
				{foreach $servers as $server}
					<li><input type="checkbox" name="Varnishs[]" value="{$server}" /><label>{$server}</label></li>
				{/foreach}
				</ul>
			{undef $servers}
		</fieldset>
		<fieldset>
			<legend>{"Valid"|i18n('extension/ezaccelerator/messages')}</legend>
			<p><input type='submit' name="send" class="button" value="{"Valid"|i18n('extension/ezaccelerator/messages')}" /></p>
		</fieldset>
	</form>
</div>
{* DESIGN: Content END *}</div></div></div>
</div>
