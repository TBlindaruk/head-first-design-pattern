<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\Pizza;

/**
 * Class ChicagoStylePepperoniPizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza
 */
class ChicagoStylePepperoniPizza extends Pizza
{
    /**
     * ChicagoStylePepperoniPizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Pepperoni Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
        $this->toppings[] = 'Black Olives';
        $this->toppings[] = 'Spinach';
        $this->toppings[] = 'Eggplant';
        $this->toppings[] = 'Sliced Pepperoni';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }
}
