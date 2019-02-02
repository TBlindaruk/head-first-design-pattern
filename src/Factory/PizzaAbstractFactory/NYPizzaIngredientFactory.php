<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory;

use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Cheese;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Clam\FreshClams;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Clams;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Dough;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Pepperoni;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Sauce;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Ingredient\Vegetable;

/**
 * Class NYPizzaIngredientFactory
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory
 */
class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    /**
     * @return Dough
     */
    public function createDough(): Dough
    {
        return new Dough\ThinCrustDough();
    }

    /**
     * @return Sauce
     */
    public function createSauce(): Sauce
    {
        return new Sauce\MarinaraSauce();
    }

    /**
     * @return Cheese
     */
    public function createCheese(): Cheese
    {
        return new Cheese\ReggianoCheese();
    }

    /**
     * @return Vegetable[]
     */
    public function createVeggies(): array
    {
        return [
            new Vegetable\Garlic(),
            new Vegetable\Onion(),
            new Vegetable\Mushroom(),
            new Vegetable\RedPepper(),
        ];
    }

    /**
     * @return Pepperoni
     */
    public function createPepperoni(): Pepperoni
    {
        return new Pepperoni\SlicedPepperoni();
    }

    /**
     * @return Clams
     */
    public function createClam(): Clams
    {
        return new FreshClams();
    }
}
