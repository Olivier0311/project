<?php
/**
 * File containing ezfSolrException class
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @author jv
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version 2.7.0-beta1
 * @package ezfind
 *
 */

/**
 * Exception for Solr issues
 */
class ezfSolrException extends ezfBaseException
{
    /**
     * Error code for a solr request timeout
     * @var int
     */
    const REQUEST_TIMEDOUT = 28, // Copy of CURLE_OPERATION_TIMEOUTED constant
          CONNECTION_TIMEDOUT = 7; // Copy of CURLE_COULDNT_CONNECT constant that can be resulted by a connection timeout

    public function __construct( $message = '', $code = 0 )
    {
        $this->code = $code;
        parent::__construct( $message );
    }
}
?>