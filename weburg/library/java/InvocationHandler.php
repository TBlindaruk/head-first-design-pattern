<?php
interface InvocationHandler {
	public function invoke($methodName, array $methodArguments);
}
?>