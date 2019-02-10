<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Adapter\Ducks;

/**
 * Interface Turkey
 *
 * @package Maksi\HeadFirstDesignPattern\Adapter\Ducks
 */
interface Turkey
{
    public function gobble(): void;

    public function fly(): void;
}
