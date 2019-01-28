<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza;

/**
 * Class ClamPizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza
 */
class ClamPizza extends Pizza
{
    /**
     * ClamPizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Clam Pizza';
        $this->dough = 'Thin crust';
        $this->sauce = 'White garlic sauce';
        $this->toppings[] = 'Clams';
        $this->toppings[] = 'Grated parmesan cheese';
    }
}
