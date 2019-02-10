<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Adapter\Ducks;

/**
 * Interface Duck
 *
 * @package Maksi\HeadFirstDesignPattern\Adapter\Ducks
 */
interface Duck
{
    public function quack(): void;

    public function fly(): void;
}
