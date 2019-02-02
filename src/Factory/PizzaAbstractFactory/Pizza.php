<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory;

use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Cheese;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Clams;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Dough;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Pepperoni;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Sauce;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Vegetable;

/**
 * Class Pizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory
 */
abstract class Pizza
{
    /** @var Dough */
    protected $dough;

    /** @var Sauce */
    protected $sauce;

    /** @var Cheese */
    protected $cheese;

    /** @var Clams */
    protected $clam;

    /** @var Vegetable[] */
    protected $veggies;

    /** @var Pepperoni */
    protected $pepperoni;

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }

    /**
     * @return string
     */
    abstract public function getName(): string;
}
