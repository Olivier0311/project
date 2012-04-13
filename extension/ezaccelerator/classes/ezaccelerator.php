<?php
/**
 *
 * eZAccelerator : It's THE connector class to dialog whith Varnish
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 */


class eZAccelerator {

	/**
	 *
	 * Status code of response
	 * @var int
	 */
	const STATUS_SUCCESS = 0;
	const STATUS_FAILED = 1;
	const SUCCESS_CODE = 200;

	/**
	 * Authorized command
	 * @var array
	 */
	public static $_COMMAND = array(
			"help",
			"param.show",
			"ping",
			"status"
	);

	/**
	 * Hostname of Varnish server
	 * @var string
	 */
	protected $_hostname;

	/**
	 * TCP Port of BAN interface of Varnish server
	 * @var int
	 */
	protected $_BANPort;

	/**
	 * TCP Port of HTTP interface of Varnish server
	 * @var int
	 */
	protected $_HTTPPort;

	/**
	 * Client timeout of requests sent to Varnish server
	 * @var int
	 */
	protected $_timeout;


	/**
	 * Constructor
	 * @param string $name identifier of Varnish server (specified in ezaccelerator.ini. See doc/INSTALL)
	 */
	public function __construct($name) {
		$ini = eZINI::instance("ezaccelerator.ini");
		list( $this->_hostname, $this->_BANPort, $this->_HTTPPort, $this->_timeout ) = $ini->variableMulti("ServerSettings_" . $name, array("Host", "BANPort", "HTTPPort", "TimeOut"));
	}

	/**
	 * Sugar proxy command to execute a command in BAN
	 * @param string $functionName command name
	 * @param array $args (not use)
	 * @return string
	 */
	public function __call($functionName, $args) {
		if (in_array($functionName, self::$_COMMAND))
			return $this->executeOnBANInterface($functionName);
	}

	/**
	 * Simple purge command
	 * @param string $str options and arguments for the ban command in Varnish BAN
	 * @return string
	 */
	public function purge($str) {
		return $this->executeOnBANInterface("ban $str");
	}

	/**
	 * By Header purge command, directly in HTTP if possible, if the VCL can handle this
	 * @param unknown_type $headerName
	 * @param unknown_type $headerValue
	 * @return string|multitype:string
	 */
	public function purgeByHeader($headerName, $headerValue) {
		$eZAcceleratorINI = eZINI::instance("ezaccelerator.ini");
		$specialHeaderName = $eZAcceleratorINI->variable("eZAcceleratorSettings", "HeaderNameNode");
		//especially for /node/ we can use HTTP BAN request
		if ($headerName == $specialHeaderName) {
			return $this->executeOnHTTPInterface("BAN /node/$headerValue");
		} else {
			// else we use the BAN console
			$command = "ban obj.http.$headerName == $headerValue";
			return $this->executeOnBANInterface($command);
		}
	}

	/**
	 * Purge URL via HTTP
	 * @param string $regex
	 * @return string
	 */
	public function purgeUrl($regex) {
		return $this->executeOnHTTPInterface("BAN /url/$regex");
	}

	/**
	 * Purge All in Varnish server
	 * @return string
	 */
	public function purgeAll() {
		return $this->purgeUrl(".");
	}

	/**
	 * Execute sub request in Varnish
	 * Don't handle a proxy, because a proxy between Apache and Varnish is not a good idea
	 * @param string $fullRequest
	 * @param int $port
	 * @return string
	 */
	protected function _subExecuteRequest($fullRequest,$port) {
		// Open socket connection to server
		$fp = fsockopen($this->_hostname,$port,$errorNumber,$errorString,$this->_timeout);
		// if connection to socket fails
		if (!$fp || $errorNumber != 0) {
			eZDebug::writeError("Port $port Connection failed. " . $errorString);
			return array(
							"Status" => self::STATUS_FAILED,
							"Message" => $errorString
						);
		}
		if (!fwrite($fp, $fullRequest)) {
			fclose($fp);
			eZDebug::writeError("Port $port Sending failed. Can't send message to server.");
			return array(
							"Status" => self::STATUS_FAILED,
							"Message" => "Sending failed. Can't send message to server."
						);
		}
		// read the message which came from server
		$readOut = "";
		// read the message which came from server
		while (!feof($fp)) $readOut .= fgets($fp, 4096);

		// Search for SUCCESS_CODE in the data
		// check BAN console
		$erg = preg_match("/^" . self::SUCCESS_CODE . "/", $readOut);
		// returns an error if STATUS_CODE not founded
		if (!$erg) {
			$erg = preg_match("/^HTTP\/1\.1 " . self::SUCCESS_CODE . "/", $readOut);
			if (!$erg) {
				fclose($fp);
				eZDebug::writeError($fullRequest . " failed. " . $readOut);
				return array(
								"Status" => self::STATUS_FAILED,
								"Message" => $fullRequest . " failed. " . $readOut
							);
			}
		}
		// close the socket
		fclose($fp);
		return trim($readOut);
	}

	/**
	 * Launch the request on HTTP interface
	 * @param string $request
	 * @return string
	 */
	protected function executeOnHTTPInterface($request) {
		$siteINI = eZINI::instance("site.ini");
		$siteURL = $siteINI->variable("SiteSettings", "SiteURL");
		$request = $request. " HTTP/1.1\r\nHost:$siteURL\r\n\r\n";
		$data = $this->_subExecuteRequest($request, $this->_HTTPPort);
		list($headers,$xmldata) = explode('##XML##',$data);
		$xml = simplexml_load_string(trim($xmldata));
		$result = $xml->content;
		return array(
									"Status" => self::STATUS_SUCCESS,
									"Message" =>  trim($result)
		);
	}

	/**
	 * Launch the request on BAN interface
	 * @param string $request
	 * @return string
	 */
	protected function executeOnBANInterface($request) {
		$request = trim($request) . "\r\n";
		$request.="quit\r\n";
		$result = $this->_subExecuteRequest($request, $this->_BANPort);
		// clean result
		$toClear = array("
Type 'help' for command list.
Type 'quit' to close CLI session.
","500 22","Closing CLI connection");
		return array(
						"Status" => self::STATUS_SUCCESS,
						"Message" => "-------\n" . "Succeed: " . trim(str_replace($toClear, "", $result))
					);
	}
}
