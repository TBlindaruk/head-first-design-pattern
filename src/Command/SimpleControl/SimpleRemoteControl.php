<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\SimpleControl;

/**
 * Class SimpleRemoteControl
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Example1
 */
class SimpleRemoteControl
{
    /**
     * @var Command
     */
    private $command;

    public function setCommand(Command $command):void
    {
        $this->command = $command;
    }

    public function buttonWasPressed():void
    {
        $this->command->execute();
    }
}
