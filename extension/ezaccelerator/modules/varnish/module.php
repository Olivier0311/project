<?php
/**
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 *
 */

$Module = array('name' => 'eZ Accelerator');

$ViewList = array();
$ViewList['control'] = array(
				'script' => 'control.php',
				'functions' => array('control'),
				'params' => array('view'),
				'default_navigation_part' => 'ezacceleratornavigationpart',
);
$ViewList['purgeterm'] = array(
				'script' => 'purgeterm.php',
				'functions' => array('purgeterm'),
				'params' => array('view'),
				'default_navigation_part' => 'ezacceleratornavigationpart',
				'single_post_actions' => array(
					'PurgeUrl' => 'PurgeUrl',
					'Varnishs' => 'Varnishs',
				)
);

$FunctionList = array();
$FunctionList['control'] = array();
$FunctionList['purgeterm'] = array();
?>
