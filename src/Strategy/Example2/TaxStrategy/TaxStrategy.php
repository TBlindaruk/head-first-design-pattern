<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy;

use Maksi\HeadFirstDesignPattern\Strategy\Example2\Product;

/**
 * Interface TaxStrategy
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy
 */
interface TaxStrategy
{
    /**
     * @param Product $product
     *
     * @return float
     */
    public function calculateTax(Product $product): float ;

    /**
     * @param Product $product
     *
     * @return bool
     */
    public function support(Product $product): bool;
}
