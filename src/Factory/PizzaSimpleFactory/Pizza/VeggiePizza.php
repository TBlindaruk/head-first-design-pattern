<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza;

/**
 * Class VeggiePizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza
 */
class VeggiePizza extends Pizza
{
    /**
     * VeggiePizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Veggie Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        $this->toppings[] = 'Shredded mozzarella';
        $this->toppings[] = 'Grated parmesan';
        $this->toppings[] = 'Diced onion';
        $this->toppings[] = 'Sliced mushrooms';
        $this->toppings[] = 'Sliced red pepper';
        $this->toppings[] = 'Sliced black olives';
    }
}
