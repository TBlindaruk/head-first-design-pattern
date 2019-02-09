<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl;

use Maksi\HeadFirstDesignPattern\Command\RemoteControl\CeilingFan\CeilingFan;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\CeilingFan\CeilingFanOffCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\CeilingFan\CeilingFanOnCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\GarageDoor\GarageDoor;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\GarageDoor\GarageDoorDownCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\GarageDoor\GarageDoorUpCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light\Light;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light\LightOffCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light\LightOnCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light\LivingroomLightOffCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light\LivingroomLightOnCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Stereo\Stereo;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Stereo\StereoOffCommand;
use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Stereo\StereoOnWithCDCommand;

/**
 * Class RemoteLoader
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl
 */
class RemoteLoader
{
    public function configure(): void
    {
        $remoteControl = new RemoteControl();

        $livingRoomLight = new Light('Living Room');
        $kitchenLight = new Light('Kitchen');
        $ceilingFan = new CeilingFan('Living Room');
        $garageDoor = new GarageDoor('');
        $stereo = new Stereo('Living Room');

        $livingRoomLightOn = new LivingroomLightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LivingroomLightOffCommand($livingRoomLight);
        $kitchenLightOn = new LightOnCommand($kitchenLight);
        $kitchenLightOff = new LightOffCommand($kitchenLight);

        $ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
        $ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

        $garageDoorUp = new GarageDoorUpCommand($garageDoor);
        $garageDoorDown = new GarageDoorDownCommand($garageDoor);

        $stereoOnWithCD = new StereoOnWithCDCommand($stereo);
        $stereoOff = new StereoOffCommand($stereo);

        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
        $remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
        $remoteControl->setCommand(2, $ceilingFanOn, $ceilingFanOff);
        $remoteControl->setCommand(3, $stereoOnWithCD, $stereoOff);
        $remoteControl->setCommand(4, $garageDoorUp, $garageDoorDown);

        echo $remoteControl;

        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);
        $remoteControl->onButtonWasPushed(1);
        $remoteControl->offButtonWasPushed(1);
        $remoteControl->onButtonWasPushed(2);
        $remoteControl->offButtonWasPushed(2);
        $remoteControl->onButtonWasPushed(3);
        $remoteControl->offButtonWasPushed(3);
        $remoteControl->onButtonWasPushed(4);
        $remoteControl->offButtonWasPushed(4);
    }
}
