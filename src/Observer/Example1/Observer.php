<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Observer\Example1;

/**
 * Interface Observer
 *
 * @package Maksi\HeadFirstDesignPattern\Observer\Example1
 */
interface Observer
{
    /**
     * Actually we can push to the argument only object of `Subject`.
     *
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update(float $temp, float $humidity, float $pressure): void;
}
