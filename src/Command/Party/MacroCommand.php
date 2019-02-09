<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party;

/**
 * Class MacroCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Party
 */
class MacroCommand implements Command
{
    /**
     * @var Command[]
     */
    private $commands;

    /**
     * MacroCommand constructor.
     *
     * @param array $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    /**
     * NOTE:  these commands have to be done backwards to ensure
     * proper undo functionality
     */
    public function undo(): void
    {
        for ($i = \count($this->commands) - 1; $i >= 0; $i--) {
            $this->commands[$i]->undo();
        }
    }
}
