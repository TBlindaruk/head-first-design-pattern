<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Adapter\Ducks;

/**
 * Class DuckAdapter
 *
 * @package Maksi\HeadFirstDesignPattern\Adapter\Ducks
 */
class DuckAdapter implements Turkey
{
    /**
     * @var Duck
     */
    private $duck;

    /**
     * DuckAdapter constructor.
     *
     * @param Duck $duck
     */
    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    public function gobble(): void
    {
        $this->duck->quack();
    }

    public function fly(): void
    {
        if (0 === random_int(0, 5)) {
            $this->duck->fly();
        }
    }
}
