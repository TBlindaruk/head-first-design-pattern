<?php
require_once "../../../bootstrap.php";
require_once "custom/Proxy.php";

$args = $_SERVER["argv"];

println("Stopping server " . $args[0]);

$proxy = Proxy::getProxy($args[0]);
$proxy->shutdown();
?>