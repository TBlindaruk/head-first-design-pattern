<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Observer\Example1;

/**
 * Interface DisplayElement
 *
 * @package Maksi\HeadFirstDesignPattern\Observer\Example1
 */
interface DisplayElement
{
    /**
     * @return void
     */
    public function display(): void;
}
