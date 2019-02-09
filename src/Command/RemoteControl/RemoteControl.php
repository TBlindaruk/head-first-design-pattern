<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl;

/**
 * Class RemoteControl
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl
 */
class RemoteControl
{
    /**
     * @var Command[]
     */
    protected $onCommands;

    /**
     * @var Command[]
     */
    protected $offCommands;

    /**
     * RemoteControl constructor.
     */
    public function __construct()
    {
        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $stringBuff = '';
        $stringBuff .= "\n------ Remote Control -------\n";
        for ($i = 0, $iMax = \count($this->onCommands); $i < $iMax; $i++) {
            $stringBuff .= '[slot ' . $i . '] ' . \get_class($this->onCommands[$i]) . '    ' . \get_class($this->offCommands[$i]) . "\n";
        }

        return $stringBuff;
    }
}
