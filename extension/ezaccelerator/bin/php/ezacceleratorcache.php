<?php
/**
 * ezacceleratorcache : Varnish Purge script
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 *
 * Informations :
 *
 * This script can be launch directly (without the worker parameters) or via the daemon.php
 * This script is in charge to purge in Varnish all the url reprensented by a group of node_id in parameters clear-node
 *
 * In daemon mode, when a worker parameters is set, the script fetch in the database, all the node_id which doesn't have a worker
 * and it set itself as worker
 *
 */

require 'autoload.php';
$cli = eZCLI::instance();
$cli->setUseStyles(true);
$script = eZScript::instance(array('description' => ( 	"eZ Accelerator QueueObject Daemon.\n\n"),
														'use-modules' => true,
														'use-extensions' => true
													)
							);
$script->startup();
$options = $script->getOptions("[clear-node:][worker:]","",
								array(
										'clear-node' => 'Clears Varnish view caches related to nodes id',
										'worker' => 'Say to the script is the daemon mode',
									)
							);
$script->initialize();
if ($idList = $options['clear-node']) {
	$idList = explode(',', $idList);
	$isOnDaemon = isset($options['worker']);
	$worker = $options['worker'];
	$objects = Array();
	if ($isOnDaemon) {
		$catchtime = time();
		foreach ($idList as $node_id) {
			$cond = array(
				'worker' => $worker,
				'node_id' => $node_id
			);
			$o = eZPersistentObject::fetchObject(eZAcceleratorQueueObject::definition(), null, $cond);
			$o->setAttribute("catchtime", $catchtime);
			$o->store();
			$objects[] = $o;
		}
	}
	// purge directly here, because the list a node is already generated via the view cache system
	// with the kernel override line :
	eZAcceleratorManager::clearVarnishCacheOfNodeIdList($idList);

	if ($isOnDaemon) {
		foreach ($objects as $o)
		$o->remove();
	}
}
$script->shutdown();
?>