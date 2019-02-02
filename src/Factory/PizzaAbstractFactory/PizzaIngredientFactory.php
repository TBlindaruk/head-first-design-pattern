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
 * Interface PizzaIngredientFactory
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory
 */
interface PizzaIngredientFactory
{
    /**
     * @return Dough
     */
    public function createDough(): Dough;

    /**
     * @return Sauce
     */
    public function createSauce(): Sauce;

    /**
     * @return Cheese
     */
    public function createCheese(): Cheese;

    /**
     * @return Vegetable[]
     */
    public function createVeggies(): array;

    /**
     * @return Pepperoni
     */
    public function createPepperoni(): Pepperoni;

    /**
     * @return Clams
     */
    public function createClam(): Clams;
}
