<?php
/**
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 *
 */

$eZTemplateOperatorArray = array();
$eZTemplateOperatorArray[] = array(	'script' => 'extension/ezaccelerator/autoloads/ezacceleratorutils.php',
									'class' => 'eZAcceleratorUtils',
									'operator_names' => array('esi-block','varnish-ttl','varnish-init'));
?>