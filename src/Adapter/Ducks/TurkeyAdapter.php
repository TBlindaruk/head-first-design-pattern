<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Adapter\Ducks;

/**
 * Class TurkeyAdapter
 *
 * @package Maksi\HeadFirstDesignPattern\Adapter\Ducks
 */
class TurkeyAdapter implements Duck
{
    /**
     * @var Turkey
     */
    private $turkey;

    /**
     * TurkeyAdapter constructor.
     *
     * @param Turkey $turkey
     */
    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
