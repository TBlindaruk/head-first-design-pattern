<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\SimpleControl;

/**
 * Interface Command
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Example1
 */
interface Command
{
    public function execute(): void;
}
