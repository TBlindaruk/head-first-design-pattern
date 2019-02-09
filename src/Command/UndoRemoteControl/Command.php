<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl;

/**
 * Interface Command
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl
 */
interface Command
{
    public function execute(): void;

    public function undo(): void;
}
