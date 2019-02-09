<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\SimpleControl;

/**
 * Class GarageDoor
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Example1
 */
class GarageDoor
{
    public function up(): void
    {
        echo 'Garage Door is Open' . PHP_EOL;
    }

    public function down(): void
    {
        echo 'Garage Door is Closed' . PHP_EOL;
    }

    public function stop(): void
    {
        echo 'Garage Door is Stopped' . PHP_EOL;
    }

    public function lightOn(): void
    {
        echo 'Garage light is on' . PHP_EOL;
    }

    public function lightOff(): void
    {
        echo 'Garage light is off' . PHP_EOL;
    }
}
