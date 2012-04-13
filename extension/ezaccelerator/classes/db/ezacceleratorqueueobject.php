<?php
/**
 * eZAcceleratorQueueObject : Queue object to purge varnish objects
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 */

class eZAcceleratorQueueObject extends eZPersistentObject {

	/**
	 * Constructor
	 * @param array $row
	 */
	protected function __construct($row) {
		parent::eZPersistentObject($row);
	}

	/**
	 * Set up the definition
	 */
	public static function definition() {
		static $def = array('fields' => array(
						'node_id' => array(
								'name' => 'node_id',
								'datatype' => 'integer',
								'default' => 0,
								'required' => true),
						'worker' => array(
								'name' => 'worker',
								'datatype' => 'string',
								'default' => '',
								'required' => false),
						'catchtime' => array(
								'name' => 'catchtime',
								'datatype' => 'integer',
								'default' => 0,
								'required' => false),
						),
				'keys' => array('node_id', 'worker'),
				'class_name' => 'eZAcceleratorQueueObject',
				'name' => 'ezacceleratorqueue');
		return $def;
	}

	/**
	 * Create object method
	 * @param array $row
	 * @return eZAcceleratorQueueObject
	 */
	public static function create(array $row = array()) {
		$row['worker'] = "";
		$object = new self($row);
		return $object;
	}

}