<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\Pizza;

/**
 * Class NYStylePepperoniPizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza
 */
class NYStylePepperoniPizza extends Pizza
{

    /**
     * NYStylePepperoniPizza constructor.
     */
    public function __construct()
    {
        $this->name = 'NY Style Pepperoni Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
        $this->toppings[] = 'Sliced Pepperoni';
        $this->toppings[] = 'Garlic';
        $this->toppings[] = 'Onion';
        $this->toppings[] = 'Mushrooms';
        $this->toppings[] = 'Red Pepper';
    }
}
