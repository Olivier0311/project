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
$varnishManager = eZAcceleratorManager::getInstance();
$tpl->setVariable('termresults', $varnishManager->$view());
$tpl->setVariable('moduleViewName', $view);
$Result = array();
$Result['pagelayout'] = true;
$Result['content'] = $tpl->fetch("design:varnish/controls.tpl");
$Result['path'] = array(array(
								'url' => 'varnish/control/' . $view,
								'text' => 'Control Varnish'
							)
						);
$Result['left_menu'] = 'design:varnish/left_menu.tpl';
?>
