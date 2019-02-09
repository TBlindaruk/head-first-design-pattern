<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\Light;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class LightOffCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light
 */
class LightOffCommand implements Command
{
    /**
     * @var Light
     */
    protected $light;

    /**
     * LightOffCommand constructor.
     *
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}
