<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party;

/**
 * Class RemoteControl
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Party
 */
class RemoteControl
{
    /**
     * @var Command[]
     */
    private $onCommands;
    /**
     * @var Command[]
     */
    private $offCommands;
    /**
     * @var Command
     */
    private $undoCommand;

    /**
     * RemoteControlWithUndo constructor.
     */
    public function __construct()
    {

        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
        $this->undoCommand = new NoCommand();
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $result = '';
        $result .= "\n------ Remote Control -------\n" . PHP_EOL;
        for ($i = 0, $iMax = \count($this->onCommands); $i < $iMax; $i++) {
            $result .= '[slot ' . $i . '] ' . \get_class($this->onCommands[$i]) . '    ' . \get_class($this->offCommands[$i]) . "\n";
        }
        $result .= '[undo] ' . \get_class($this->undoCommand) . "\n";

        return $result;
    }
}
