<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory;

/**
 * Class Pizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory
 */
abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
    }

    public function bake(): void
    {
        echo 'Baking ' . $this->name . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting ' . $this->name . PHP_EOL;
    }

    public function box(): void
    {
        echo 'Boxing ' . $this->name . PHP_EOL;
    }

    public function __toString()
    {
        // code to display pizza name and ingredients
        $display = '';
        $display .= '---- ' . $this->name . ' ----, ';
        $display .= $this->dough . ', ';
        $display .= $this->sauce . ', ';
        for ($i = 0; $i < count($this->toppings); $i++) {
            $display .= $this->toppings[$i] . ', ';
        }

        return $display;
    }
}
