<?php
/**
 * eZAcceleratorFS2FileHandler : Handle the staleCache in varnish for the eZFS2FileHandler
 *
 * @author Sebastien Morel <s.morel@novactive.com>
 * @copyright Copyright 2011 (c) Novactive. All rights reserved.
 * @license eZ Proprietary Extension License (PEL), Version 1.3
 * @version 1.3-1
 */

class eZAcceleratorFS2FileHandler  extends eZFS2FileHandler {
	/**
	 * Add a header when is the stalecache
	 * @see eZFS2FileHandler::processCache()
	 */
	function processCache( $retrieveCallback, $generateCallback = null, $ttl = null, $expiry = null, $extraData = null ) {
		if ($this->useStaleCache)
			header("X-eZ-Publish: isUsingStaleCache");
		return parent::processCache($retrieveCallback,$generateCallback,$ttl,$expiry,$extraData);
	}
}

?>