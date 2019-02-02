<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\PizzaIngredientFactory;

class ClamPizza extends Pizza
{
    /**
     * @var PizzaIngredientFactory
     */
    private $ingredientFactory;

    /**
     * ClamPizza constructor.
     *
     * @param PizzaIngredientFactory $ingredientFactory
     */
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo 'Preparing ' . $this->getName() . PHP_EOL;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'ClamPizza';
    }
}