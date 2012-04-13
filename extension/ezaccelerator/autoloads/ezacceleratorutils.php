<?php
/**
 * eZAcceleratorUtils : Template operator
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 */

class eZAcceleratorUtils {

	function operatorList() {
		return array('esi-block', 'varnish-init', 'varnish-ttl');
	}

	function namedParameterPerOperator() {
		return true;
	}

	function namedParameterList() {
		return array(
			'esi-block' => array(	'url' => array(
												'required' => true,
												'default' => ""
											),
									'params' => array(
												'required' => false,
												'default' => array()
											)
								),
			'varnish-ttl' => array(	'ttl' => array(
												'required' => true,
												'default' => ""
											)
								),
			'varnish-init' => array('params' => array(
												'required' => true,
												'default' => array()
											)
								),
		);
	}

	function modify($tpl, $operatorName, $operatorParameters, &$rootNamespace, &$currentNamespace, &$operatorValue, &$namedParameters) {
		switch ($operatorName) {
			case 'esi-block':
				$operatorValue = $this->esiblock($namedParameters['url'], $namedParameters['params']);
				break;
			case 'varnish-ttl':
				$operatorValue = $this->varnishttl($namedParameters['ttl']);
				break;
			case 'varnish-init':
				$operatorValue = $this->varnishinit($namedParameters['params']);
				break;
		}
	}

	/**
	 * allow to generate an ESI tag with a esi pagelayout
	 * @param string $url
	 * @param array $params (only use_siteaccess for the moment)
	 * @return string
	 */
	protected function esiblock($url, $params) {
		$eZAcceleratorINI = eZINI::instance("ezaccelerator.ini");
		$layoutESIName = $eZAcceleratorINI->variable("EdgeSideIncludeSettings", "LayoutName");
		$cUrl = "/layout/set/$layoutESIName/" . trim($url, '/');
		if ($params['use_siteaccess'] == "enabled")
		eZURI::transformURI($cUrl, false);
		return "<!-- ESI-START called [$cUrl] --><esi:include src='" . $cUrl . "' /><!-- ESI-END -->";
	}

	/**
	 * Send a header, which say to Varnish the ttl value
	 * @param int $ttl (ex: 30s or 1h)
	 * @return ""
	 */
	protected function varnishttl($ttl) {
		$eZAcceleratorINI = eZINI::instance("ezaccelerator.ini");
		$layoutESIName = $eZAcceleratorINI->variable("EdgeSideIncludeSettings", "HeaderName");
		header("$layoutESIName: $ttl");
		return "";
	}

	/**
	 * Send a header, which tag to Varnish the node_id of the current view full
	 * This template operator MUST be used in pagelayouts. See doc/INSTALL
	 * @param array $params (it's the $module_result)
	 * @return ""
	 */
	protected function varnishinit($params) {
		$eZAcceleratorINI = eZINI::instance("ezaccelerator.ini");
		$headerName = $eZAcceleratorINI->variable("eZAcceleratorSettings", "HeaderNameNode");
		if ((isset($params['content_info'])) && (isset($params['content_info']['node_id']))) {
			header("$headerName: " . $params['content_info']['node_id']);
		}
		return "";
	}
}
?>
