<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy;

use Maksi\HeadFirstDesignPattern\Strategy\Example2\Product;

/**
 * Class LowTaxStrategy
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy
 */
class LowTaxStrategy implements TaxStrategy{

    /**
     * @param Product $product
     *
     * @return float
     */
    public function calculateTax(Product $product): float
    {
        return $product->getPrice() * 0.01;
    }

    /**
     * @param Product $product
     *
     * @return bool
     */
    public function support(Product $product): bool
    {
        return $product->getPrice() > 10000000;
    }
}
