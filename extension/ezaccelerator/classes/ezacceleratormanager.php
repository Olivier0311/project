<?php
/**
 *
 * eZAcceleratorManager :
 * 		manager of eZAccelerator object to handle multiple Varnish server
 * 		contains static method to handle purging
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 */

class eZAcceleratorManager {

	/**
	 * Instance of the singleton
	 * @var eZAcceleratorManager
	 */
	private static $instance;

	/**
	 * List of Varnish server wrapper into eZAccelerator
	 * @var array
	 */
	protected $_servers;

	/**
	 * Constructor
	 */
	private function __construct() {
		$eZAcceleratorINI = eZINI::instance("ezaccelerator.ini");
		$servers = $eZAcceleratorINI->variable("VarnishServerList", "Servers");
		$this->_servers = array();
		foreach ($servers as $server)
		$this->_servers[$server] = new eZAccelerator($server);
	}

	/**
	 * Get instance of singleton
	 * @return eZAcceleratorManager
	 */
	public static function getInstance() {
		if (null === self::$instance)
		self::$instance = new self();
		return self::$instance;
	}
	/**
	 * Handle clone, singleton pattern
	 */
	final private function __clone() {

	}

	/**
	 * Proxy method to each varnish server in the list $_servers
	 * @param string $method
	 * @param array $args
	 * @return mixed
	 */
	public function __call($method, $args) {
		$results = array();
		foreach ($this->_servers as $key => $server) {
			$results[$key] = call_user_func_array(array($server, $method), $args);
		}
		return $results;
	}

	/**
	 * Getter of varnish server wrap into eZAccelerator object
	 * @param string $name
	 * @return false|eZAccelerator
	 */
	public function __get($name) {
		if (array_key_exists($name, $this->_servers))
		return $this->_servers[$name];
		return false;
	}

	/* Static Functions */

	/**
	 * Return the list of node_id the system cache purge when the node_id is published
	 * ViewCache fetch mechanism is used, copy of kernel method
	 * @param int $node_id
	 * @return array array node_id for purge
	 */
	public function retrieveNodeIdListToClearViewCacheOfNodeId($node_id) {
		$node = eZFunctionHandler::execute('content', 'node', array('node_id' => $node_id));
		$object = $node->object();
		$objectID = $object->attribute('id');
		$additionalNodeList = array();
		$nodeList = eZContentCacheManager::nodeList($objectID, true);
		if ($nodeList === false and !is_array($additionalNodeList))
			return false;
		if ($nodeList === false)
			$nodeList = array();
		if (is_array($additionalNodeList))
			array_splice($nodeList, count($nodeList), 0, $additionalNodeList);
		if (count($nodeList) == 0)
			return false;
		return array_unique($nodeList);
	}

	/**
	 * Clear varnish cache for node_id
	 * This method only clear varnish cache for this node_id
	 * (it doesn't retrieve node_id list from the viex cache system)
	 * @param int $node_id
	 * @return string
	 */
	public static function clearVarnishOfNodeId($node_id) {
		return self::clearVarnishCacheOfNodeIdList(array($node_id));
	}

	/**
	 * Purge Varnish cache related of node_id using the viewcache system mechanism to fetch the other node_id in relation
	 * @param int $node_id
	 * @return string
	 */
	public static function clearVarnishViewCacheOfNodeId($node_id) {
		$list = self::retrieveNodeIdListToClearViewCacheOfNodeId($node_id);
		return self::clearVarnishCacheOfNodeIdList($list);
	}

	/**
	 * Purge all the varnish cache from a node_id list
	 * doesn't fetch another node_id
	 * It's called from clearVarnishOfNodeId|clearVarnishViewCacheOfNodeId|ezacceleratorcache script
	 * @param array $nodeList
	 * @return string
	 */
	public static function clearVarnishCacheOfNodeIdList($nodeList) {
		array_unique($nodeList);
		if (sizeof($nodeList) > 0) {
			$manager = self::getInstance();
			$results = array();
			$eZAcceleratorINI = eZINI::instance("ezaccelerator.ini");
			$headerName = $eZAcceleratorINI->variable("eZAcceleratorSettings", "HeaderNameNode");
			foreach ($nodeList as $node_id) {
				if ($node_id != 1) {
					$return = array();
					$return[] = $manager->purgeByHeader($headerName, $node_id);
					foreach ($return as $ret) {
						foreach ($ret as $server => $trace) {
							$results[$node_id][$server]['Message'].=$trace['Message'] . "\n";
						}
					}
				}
			}
			return $results;
		}
	}

	/**
	 * Store the node Id List of node relating to the view cache clearlist
	 * Called from ezpEvent hook
	 * @param array $nodeIdArray
	 * @return array
	 */
	public static function registerNodeList($nodeIdArray) {
		foreach ($nodeIdArray as $nodeIdToClean) {
			$o = eZAcceleratorQueueObject::create(array('node_id' => $nodeIdToClean));
			$o->store();
		}
		return $nodeIdArray;
	}

}