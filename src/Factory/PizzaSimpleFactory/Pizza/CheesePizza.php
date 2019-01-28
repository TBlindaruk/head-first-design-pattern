<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza;

/**
 * Class CheesePizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza
 */
class CheesePizza extends Pizza
{
    /**
     * CheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Cheese Pizza';
        $this->dough = 'Regular Crust';
        $this->sauce = 'Marinara Pizza Sauce';
        $this->toppings[] = 'Fresh Mozzarella';
        $this->toppings[] = 'Parmesan';
    }
}
