<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza;

/**
 * Class PepperoniPizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza
 */
class PepperoniPizza extends Pizza
{
    /**
     * PepperoniPizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Pepperoni Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        $this->toppings[] = 'Sliced Pepperoni';
        $this->toppings[] = 'Sliced Onion';
        $this->toppings[] = 'Grated parmesan cheese';
    }
}
