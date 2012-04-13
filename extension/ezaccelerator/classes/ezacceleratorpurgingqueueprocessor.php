<?php
/**
 * eZAcceleratorPurgingQueueProcessor : Varnish Purge Queue
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 */

class eZAcceleratorPurgingQueueProcessor {

	/**
	 * Singleton instance of eZAcceleratorPurgingQueueProcessor
	 * @var eZAcceleratorPurgingQueueProcessor
	 */
	private static $instance = null;

	/**
	 * Can process ?
	 * @var boolean
	 */
	private $canProcess = true;

	/**
	 * Cli Output Object
	 * @var eZCLI
	 */
	private $cli;

	/**
	 * Quiet mode ?
	 * @var boolean
	 */
	private $isQuiet;

	/**
	 * Interval beetween 2 check of actions
	 * @var int
	 */
	private $sleepInterval;


	/**
	 * Constructor
	 */
	public function __construct() {
		$ini = eZINI::instance( 'ezaccelerator.ini' );
		$this->sleepInterval = $ini->variable( 'eZAcceleratorSettings', 'AsynchronousPurgingInterval' );
	}

	/**
	 * Singleton class loader
	 * @return eZAcceleratorPurgingQueueProcessor
	 */
	public static function instance() {
		if ( !self::$instance instanceof eZAcceleratorPurgingQueueProcessor )
			self::$instance = new eZAcceleratorPurgingQueueProcessor();
		return self::$instance;
	}

	/**
	 * Main method: infinite method that monitors queued objects, and starts
	 * the publishinbg processes if allowed
	 * @return void
	 */
	public function run() {
		while ( $this->canProcess ) {
			$list = $aList = array();
			$list = eZPersistentObject::fetchObjectList(eZAcceleratorQueueObject::definition(), null, array('worker' => ''));
			$worker = uniqid();
			foreach ($list as $o) {
				$new = clone($o);
				$new->setAttribute('worker', $worker);
				$new->store();
				$o->remove();
				$aList[] = $new->attribute('node_id');
			}
			if (sizeof($aList) > 0) {
				if (!$this->isQuiet)
					$this->cli->output("worker[$worker] = " . implode(",", $aList));

				// launch the purge
				shell_exec("/usr/bin/env php extension/ezaccelerator/bin/php/ezacceleratorcache.php --clear-node=" . implode(",", $aList) . " --worker=$worker &");
			}
			sleep( $this->sleepInterval );
		}
	}

	public function setCli($cli, $isQuiet ) {
		$this->cli = $cli;
		$this->isQuiet = $isQuiet;
	}
}
?>
