<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl;

/**
 * Class NoCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl
 */
class NoCommand implements Command
{
    public function execute(): void
    {
    }

    public function undo(): void
    {
    }
}
