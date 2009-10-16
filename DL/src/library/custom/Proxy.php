<?php
require_once "custom/ProxyObject.php";

/**
 * A simple Proxy class that can provide a server and corresponding client
 * 
 * @author Wren Weburg
 */
class Proxy {
	/**
	 * Buffer used by client and server when sending/receiving
	 * 
	 * @var int Maximum transmission size in characters
	 */
	const BUFFER = 65536;
	
	/**
	 * Command used to signal end of client session
	 * 
	 * @var string
	 */
	const CLIENT_TERMINATE_COMMAND = "quit\0";
	
	/**
	 * Command used to terminate server from client; may not want to enable in
	 * a production environment.
	 * 
	 * @var string
	 */
	const SERVICE_SHUTDOWN_COMMAND = "shutdown\0";
	
	/**
	 * Runs the proxy server indefinately
	 * 
	 * @param string $host The host:port that the server should bind to
	 * @param object $object The object being proxied
	 * @param string $interface The interface to enforce when calling methods on the proxy object
	 * @return void
	 */
	public static function runServer($host, $object, $interface = NULL) {
		// Runs the server
		// Listen for commands and pass them to $object; then send back the
		// serialized response to client
		
		$hostPort = split(':', $host);
		$host = $hostPort[0];
		$port = (isset($hostPort[1]) ? $hostPort[1] : NULL);
		
		$mysock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
		socket_bind($mysock, $host, $port);
		socket_listen($mysock, 5);
		
		echo "Listening for clients...\r\n";
		
		do {
			// Blocks until client connects
			$client = socket_accept($mysock);
			
			echo "Client connected\r\n";
			
			do {
				// Blocks until clients sends data
				$recv = trim(@socket_read($client, self::BUFFER, PHP_NORMAL_READ), " \r\n");
				
				if ($recv == self::CLIENT_TERMINATE_COMMAND) {
					break;
				} else if ($recv == self::SERVICE_SHUTDOWN_COMMAND) {
					break(2);
				} else if ($recv != "") {
					echo "Received: " . $recv . "\n";
					
					$payloadArray = split(':', $recv, 2);
					
					$method = $payloadArray[0];
					
					// Enforce method to be in interface
					$methodAllowed = self::methodAllowed($method, $interface);
					
					if (!$methodAllowed) {
						$return = new Exception("Illegal method called: " . $method . ", which is not in the interface " . $interface);
					} else {
						$arguments = unserialize($payloadArray[1]);
						
						$reflectionMethod = new ReflectionMethod($object, $method);
						$return = $reflectionMethod->invokeArgs($object, $arguments);
					}
					
					socket_write($client, serialize($return) . "\r\n");
				}
			} while (TRUE);
			socket_close($client);
			echo "Client terminated connection\r\n";
		} while (TRUE);
		
		echo "Server terminated\r\n";
		socket_close($mysock);
	}
	
	/**
	 * Retrieves a proxy object on which local calls can be made, which will be
	 * converted to calls on the server. Proxy object will return the same
	 * response as if it were local, at least to the extent to which the reponse
	 * object can be un/serialized.
	 * 
	 * @param string $host The host:port string
	 * @return mixed Proxy response
	 */
	public static function getProxy($host) {
		$hostPort = split(':', $host);
		return new ProxyObject($hostPort[0], (isset($hostPort[1]) ? $hostPort[1] : NULL));
	}
	
	/**
	 * Will check if the method is publicly available in the interface or not
	 * 
	 * @param string $method The string method name to check
	 * @param string $interface The interface name to check against
	 * @return boolean Method allowed or not
	 */
	private static function methodAllowed($method, $interface) {
		$methodAllowed = TRUE;
		if ($interface !== NULL) {
			$methodAllowed = FALSE;
			
			$reflectionClass = new ReflectionClass($interface);
			if ($reflectionClass->isInterface()) {
				$methods = $reflectionClass->getMethods();
				if (self::checkMethodInList($methods, $method)) {
					$reflectionMethod = new ReflectionMethod($interface, $method);
					if ($reflectionMethod->isPublic()) {
						$methodAllowed = TRUE;
					}
				}
			}
		}
		
		return $methodAllowed;
	}
	
	/**
	 * Checks to see if the method name is in the given reflective method list
	 * 
	 * @param array $methods The array of reflective methods to check against
	 * @param string $methodToCheck The name of the method to look up
	 * @return boolean Method in list or not
	 */
	private static function checkMethodInList(array $methods, $methodToCheck) {
		foreach ($methods as $method) {
			if ($method->name == $methodToCheck) return TRUE;
		}
		
		return FALSE;
	}
}
?>