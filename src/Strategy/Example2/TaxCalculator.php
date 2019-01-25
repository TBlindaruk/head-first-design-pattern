<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example2;

use Maksi\HeadFirstDesignPattern\Strategy\Example2\StrategyCollection\StrategyCollection;

/**
 * Class TaxCalculator
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example2
 */
class TaxCalculator
{
    /**
     * @var StrategyCollection
     */
    private $strategyCollection;

    /**
     * Tax constructor.
     *
     * @param StrategyCollection $strategyCollection
     */
    public function __construct(StrategyCollection $strategyCollection)
    {
        $this->strategyCollection = $strategyCollection;
    }

    /**
     * @param Product $product
     *
     * @return float
     * @throws TaxCalculationException
     */
    public function calculateTax(Product $product): float
    {
        foreach ($this->strategyCollection->getSortedStrategy() as $taxStrategy) {
            if ($taxStrategy->support($product)) {
                return $taxStrategy->calculateTax($product);
            }
        }

        throw new TaxCalculationException('could not calculate tax');
    }

    /**
     * @param StrategyCollection $strategyCollection
     *
     * @return TaxCalculator
     */
    public function setStrategyCollection(StrategyCollection $strategyCollection): self
    {
        $this->strategyCollection = $strategyCollection;

        return $this;
    }
}
