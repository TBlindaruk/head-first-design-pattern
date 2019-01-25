<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example2\StrategyCollection;

use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy\LowTaxStrategy;
use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy\NormalTaxStrategy;
use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy\NullTaxStrategy;

/**
 * Class WeekendStrategy
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example2\StrategyCollection
 */
class WeekendStrategyCollection extends StrategyCollection
{
    /**
     * WeekendStrategy constructor.
     *
     * @param NullTaxStrategy   $nullTaxStrategy
     * @param LowTaxStrategy    $lowTaxStrategy
     * @param NormalTaxStrategy $normalTaxStrategy
     */
    public function __construct(
        NullTaxStrategy $nullTaxStrategy,
        LowTaxStrategy $lowTaxStrategy,
        NormalTaxStrategy $normalTaxStrategy
    ) {
        parent::__construct();

        $this->addStrategy($nullTaxStrategy);
        $this->addStrategy($lowTaxStrategy);
        $this->addStrategy($normalTaxStrategy);
    }
}
