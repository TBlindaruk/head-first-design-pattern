<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl;

/**
 * Interface Command
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl
 */
interface Command
{
    public function execute(): void;
}
