<?php
declare(strict_types = 1);

use Maksi\HeadFirstDesignPattern\Command\SimpleControl\GarageDoor;
use Maksi\HeadFirstDesignPattern\Command\SimpleControl\GarageDoorOpenCommand;
use Maksi\HeadFirstDesignPattern\Command\SimpleControl\Light;
use Maksi\HeadFirstDesignPattern\Command\SimpleControl\LightOnCommand;
use Maksi\HeadFirstDesignPattern\Command\SimpleControl\SimpleRemoteControl;

require_once '../../../vendor/autoload.php';

$remote = new SimpleRemoteControl();
$light = new Light();
$lightOn = new LightOnCommand($light);
$garageDoor = new GarageDoor();
$garageDoorOpen = new GarageDoorOpenCommand($garageDoor);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();
$remote->setCommand($garageDoorOpen);
$remote->buttonWasPressed();