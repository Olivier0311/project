<?php
/**
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 *
 */

$Module = $Params["Module"];
$view = $Params['view'];
$tpl = eZTemplate::factory();

$http = eZHTTPTool::instance();
if (( $http->hasPostVariable('PurgeUrl')) || ( $http->hasPostVariable('Varnishs'))) {
	if ($http->hasPostVariable('PurgeUrl')) {
		$PurgeUrl = $http->postVariable('PurgeUrl');
		if ($http->hasPostVariable('Varnishs')) {
			$Varnishs = $http->postVariable('Varnishs');
		} else {
			$tpl->setVariable('error', ezpI18n::tr('extension/ezaccelerator/messages', "You must choice one server at least."));
		}
	} else {
		$tpl->setVariable('error', ezpI18n::tr('extension/ezaccelerator/messages', "You must give an url or an url pattern."));
	}
}


if ($PurgeUrl && $Varnishs) {
	$tpl->setVariable('PurgeUrl', $PurgeUrl);
	$varnishManager = eZAcceleratorManager::getInstance();
	foreach ($Varnishs as $server)
		$result[$server] = $varnishManager->$server->purgeUrl($PurgeUrl);
	$tpl->setVariable('termresults', $result);
	$tpl->setVariable('message', ezpI18n::tr('extension/ezaccelerator/messages', "The Varnish cache have been cleared."));
}

$Result = array();
$Result['pagelayout'] = true;
$Result['content'] = $tpl->fetch("design:varnish/purgeterm.tpl");
$Result['path'] = array(array(
							'url' => 'varnish/control/purgeterm',
							'text' => 'Purge Varnish'
							)
						);
$Result['left_menu'] = 'design:varnish/left_menu.tpl';
?>