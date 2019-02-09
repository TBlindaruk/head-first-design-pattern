<?php
declare(strict_types = 1);


use Maksi\HeadFirstDesignPattern\Command\RemoteControl\RemoteLoader;

require_once '../../../vendor/autoload.php';

(new RemoteLoader())->configure();