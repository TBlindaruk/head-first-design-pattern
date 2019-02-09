<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light;

use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Command;

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
}
