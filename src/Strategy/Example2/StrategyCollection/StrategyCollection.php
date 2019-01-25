<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example2\StrategyCollection;

use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy\TaxStrategy;
use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy\TaxStrategyPriorityInterface;

/**
 * Class WeekendStrategyCollection
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example2
 */
abstract class StrategyCollection
{
    /**
     * @var int
     */
    private $defaultPriority;

    /**
     * StrategyCollection constructor.
     *
     * @param int $defaultPriority
     */
    public function __construct(int $defaultPriority = 1000000000000)
    {
        $this->defaultPriority = $defaultPriority;
    }

    /**
     * @var TaxStrategy[]
     */
    private $strategies;

    /**
     * @param TaxStrategy $taxStrategy
     *
     * @return StrategyCollection
     */
    protected function addStrategy(TaxStrategy $taxStrategy): self
    {
        $this->strategies[] = $taxStrategy;

        return $this;
    }

    /**
     * @return TaxStrategy[]
     */
    public function getStrategy(): array
    {
        return $this->strategies;
    }

    /**
     * @return TaxStrategy[]
     */
    public function getSortedStrategy(): array
    {
        return uasort($this->strategies, function ($firstStrategy, $secondStrategy) {
            $firstStrategyPriority = $this->defaultPriority;
            $secondStrategyPriority = $this->defaultPriority;

            if ($firstStrategy instanceof TaxStrategyPriorityInterface) {
                $firstStrategyPriority = $firstStrategy->getPriority();
            }

            if ($secondStrategy instanceof TaxStrategyPriorityInterface) {
                $secondStrategyPriority = $secondStrategy->getPriority();
            }

            return $firstStrategyPriority <=> $secondStrategyPriority;
        });
    }
}
