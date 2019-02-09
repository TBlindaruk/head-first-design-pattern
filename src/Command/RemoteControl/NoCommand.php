<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl;

/**
 * Class NoCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl
 */
class NoCommand implements Command
{
    public function execute(): void
    {

    }
}
