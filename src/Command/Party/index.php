<?php
declare(strict_types = 1);

use Maksi\HeadFirstDesignPattern\Command\Party\Hottub\Hottub;
use Maksi\HeadFirstDesignPattern\Command\Party\Hottub\HottubOffCommand;
use Maksi\HeadFirstDesignPattern\Command\Party\Hottub\HottubOnCommand;
use Maksi\HeadFirstDesignPattern\Command\Party\Light\Light;
use Maksi\HeadFirstDesignPattern\Command\Party\Light\LightOffCommand;
use Maksi\HeadFirstDesignPattern\Command\Party\Light\LightOnCommand;
use Maksi\HeadFirstDesignPattern\Command\Party\MacroCommand;
use Maksi\HeadFirstDesignPattern\Command\Party\RemoteControl;
use Maksi\HeadFirstDesignPattern\Command\Party\Stereo\Stereo;
use Maksi\HeadFirstDesignPattern\Command\Party\Stereo\StereoOffCommand;
use Maksi\HeadFirstDesignPattern\Command\Party\Stereo\StereoOnCommand;
use Maksi\HeadFirstDesignPattern\Command\Party\TV\TV;
use Maksi\HeadFirstDesignPattern\Command\Party\TV\TVOffCommand;
use Maksi\HeadFirstDesignPattern\Command\Party\TV\TVOnCommand;

require_once '../../../vendor/autoload.php';

$remoteControl = new RemoteControl();

$light = new Light('Living Room');
$tv = new TV('Living Room');
$stereo = new Stereo('Living Room');
$hottub = new Hottub();

$lightOn = new LightOnCommand($light);
$stereoOn = new StereoOnCommand($stereo);
$tvOn = new TVOnCommand($tv);
$hottubOn = new HottubOnCommand($hottub);
$lightOff = new LightOffCommand($light);
$stereoOff = new StereoOffCommand($stereo);
$tvOff = new TVOffCommand($tv);
$hottubOff = new HottubOffCommand($hottub);

$partyOn = [$lightOn, $stereoOn, $tvOn, $hottubOn];
$partyOff = [$lightOff, $stereoOff, $tvOff, $hottubOff];

$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOff);

$remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);
echo $remoteControl;
echo '--- Pushing Macro On---' . PHP_EOL;
$remoteControl->onButtonWasPushed(0);
echo '--- Pushing Macro Off---' . PHP_EOL;
$remoteControl->offButtonWasPushed(0);
