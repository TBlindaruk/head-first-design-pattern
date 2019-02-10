<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Adapter\Ducks;

/**
 * Class WildTurkey
 *
 * @package Maksi\HeadFirstDesignPattern\Adapter\Ducks
 */
class WildTurkey implements Turkey
{
    public function gobble(): void
    {
        echo 'Gobble gobble' . PHP_EOL;
    }

    public function fly(): void
    {
        echo "I'm flying a short distance" . PHP_EOL;
    }
}
