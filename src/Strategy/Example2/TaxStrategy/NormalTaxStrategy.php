<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy;

use Maksi\HeadFirstDesignPattern\Strategy\Example2\Product;

/**
 * Class NullTaxStrategy
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy
 */
class NormalTaxStrategy implements TaxStrategy
{
    /**
     * @param Product $product
     *
     * @return float
     */
    public function calculateTax(Product $product): float
    {
        return $product->getPrice() * 0.1;
    }

    /**
     * @param Product $product
     *
     * @return bool
     */
    public function support(Product $product): bool
    {
        return $product->getPrice() > 0;
    }
}
