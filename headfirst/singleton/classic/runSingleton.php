<?php
require_once "../../../bootstrap.php";

// Test code added to demonstrate singleton in PHP

$myInstance = Singleton::getInstance();
$myInstance->value = 4;
println("Object now has instance value of " . $myInstance->value);

$myInstance2 = Singleton::getInstance();
println("After getting another instance, value should be the same: " . $myInstance2->value);
?>