<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod;

/**
 * Class Pizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod
 */
abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
        echo 'Tossing dough...' . PHP_EOL;
        echo 'Adding sauce...' . PHP_EOL;
        echo 'Adding toppings: ' . PHP_EOL;
        foreach ($this->toppings as $topping) {
            echo '   ' . $topping;
        }
        echo PHP_EOL;
    }

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $display = '';
        $display .= '---- ' . $this->name . " ----\n";
        $display .= $this->dough . "\n";
        $display .= $this->sauce . "\n";
        foreach ($this->toppings as $topping) {
            $display .= $topping . "\n";
        }

        return $display;
    }
}
