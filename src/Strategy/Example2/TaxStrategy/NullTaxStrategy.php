<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy;

use Maksi\HeadFirstDesignPattern\Strategy\Example2\Product;

/**
 * Class NullTaxStrategy
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy
 */
class NullTaxStrategy implements TaxStrategy, TaxStrategyPriorityInterface
{
    /**
     * @param Product $product
     *
     * @return float
     */
    public function calculateTax(Product $product): float
    {
        return 0.0;
    }

    /**
     * @param Product $product
     *
     * @return bool
     */
    public function support(Product $product): bool
    {
        return $product->getPrice() > 100000000;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return 1000;
    }
}
