<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\PizzaIngredientFactory;

/**
 * Class VeggiePizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza
 */
class VeggiePizza extends Pizza
{
    /**
     * @var PizzaIngredientFactory
     */
    protected $ingredientFactory;

    /**
     * VeggiePizza constructor.
     *
     * @param PizzaIngredientFactory $ingredientFactory
     */
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo 'Preparing ' . $this->getName();
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Veggie pizza';
    }
}
