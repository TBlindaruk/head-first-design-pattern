<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party;

/**
 * Interface Command
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Party
 */
interface Command
{
    public function execute(): void;

    public function undo(): void;
}
