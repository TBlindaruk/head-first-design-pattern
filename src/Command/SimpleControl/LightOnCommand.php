<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\SimpleControl;

/**
 * Class LightOnCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Example1
 */
class LightOnCommand implements Command
{
    /**
     * @var Light
     */
    private $light;

    /**
     * LightOnCommand constructor.
     *
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }
}
