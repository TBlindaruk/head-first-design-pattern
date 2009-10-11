<?php
require_once "custom/Proxy.php";

/**
 * A local object representing the server side object. Calling methods on this
 * proxy object will result in the server calling its version and sending back
 * the result.
 * 
 * @author Wren Weburg
 */
class ProxyObject {
	private $host;
	private $port;
	
	/**
	 * Holds the current instance's socket handle
	 * 
	 * @var resource Socket handle
	 */
	private $fp;
	
	/**
	 * Holds a running array of all unique host:ports for reuse across all
	 * instances, improving performance and minimizing connect/disconnects.
	 * 
	 * @var resource Socket handle
	 */
	private static $fpArray;
	
	/**
	 * Proxy object constructor. <b>Note:</b> the the server object's constructor
	 * is called on the server side; this constructor has no relation to the
	 * server's.
	 * 
	 * @param string $host The host value the client should talk to, e.g. localhost, 192.168..., etc.
	 * @param integer $port The port number the client should talk to
	 * @return void
	 */
	public function __construct($host, $port) {
		$this->host = $host;
		$this->port = $port;
	}
	
	/**
	 * Represents the methods called on the proxy object
	 * 
	 * @param string $methodName
	 * @param array $methodArguments
	 * @return mixed The server's response, deserialized, or Exception on error
	 */
	public function __call($methodName, array $methodArguments) {
		// Connect to host only once per request (reuse connection across
		// multiple calls). And only connect on the first call (lazy connect).
		$fp = $this->createSocket();

		fputs($fp, $methodName . ':' . serialize($methodArguments) . "\r\n");

		$return = fgets($fp, Proxy::BUFFER);
		
		$object = unserialize(trim($return));
		
		if ($object instanceof Exception) {
			throw $object;
		} else {
			return $object;
		}
	}
	
	/**
	 * Creates a new socket if one doesn't already exist for the host:port, and
	 * re-uses it on subsequent calls.
	 * 
	 * @return resource Socket connection
	 */
	private function createSocket() {
		if (isset(self::$fpArray[$this->host . $this->port]) && is_resource(self::$fpArray[$this->host . $this->port])) {
			$this->fp = self::$fpArray[$this->host . $this->port];
		} else {
			$this->fp = self::$fpArray[$this->host . $this->port] = fsockopen($this->host, $this->port, $errno, $errstr);
		}
		
		return $this->fp;
	}
	
	/**
	 * Called at the end of the PHP request in most cases; disconnects from
	 * client and closes out its resource handle.
	 * 
	 * @return void
	 */
	public function __destruct() {
		if (is_resource($this->fp)) {
			fputs($this->fp, Proxy::CLIENT_TERMINATE_COMMAND . "\r\n");
			
			fclose($this->fp);
		}
	}
	
	/**
	 * Internal utility function to allow shutting down the server; this is just
	 * a convenience for purpose of example; this would not be a good idea to
	 * support in a production environment!
	 * 
	 * @return void
	 */
	public function shutdown() {
		$this->createSocket();
		
		if (is_resource($this->fp)) {
			fputs($this->fp, Proxy::SERVICE_SHUTDOWN_COMMAND . "\r\n");
			
			fclose($this->fp);
		}
	}
}
?>