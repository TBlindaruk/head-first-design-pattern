<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\SimpleControl;

/**
 * Class Light
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Example1
 */
class Light
{
    public function on(): void
    {
        echo 'Light is On' . PHP_EOL;
    }
}
