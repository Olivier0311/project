<?php
/**
 * ezjscServerRemoveInVarnish : eZJSCore Server Functions
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 */


class ezjscServerRemoveInVarnish extends ezjscServerFunctionsJs {

	/**
	 * Clear the varnish cache for all object responding to this node_id
	 * @param array $args 0: node_id
	 * @return string XHTML
	 */
	public static function node($args) {
		$node_id = $args[0];
		$results = eZAcceleratorManager::clearVarnishViewCacheOfNodeId($node_id);
		$tpl = eZTemplate::factory();
		$tpl->setVariable('termresults', $results);
		$tpl->setVariable('urls', $aUrls);
		$tpl->setVariable('message', ezpI18n::tr('extension/ezaccelerator/messages', "The Varnish cache have been cleared."));
		$content = $tpl->fetch("design:varnish/ajax_results.tpl");
		return $content;
	}

	/**
	 * Show or not the button in the UI depending the role of the user
	 * @param array $args (not use)
	 */
	public static function buttons($args) {
		$tpl = eZTemplate::factory();
		$content = $tpl->fetch("design:varnish/ajax_buttons.tpl");
		return $content;
	}

}