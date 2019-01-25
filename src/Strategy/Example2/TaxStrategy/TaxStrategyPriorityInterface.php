<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy;

/**
 * Interface TaxStrategyPriorityInterface
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy
 */
interface TaxStrategyPriorityInterface
{
    /**
     * @return int
     */
    public function getPriority(): int;
}
