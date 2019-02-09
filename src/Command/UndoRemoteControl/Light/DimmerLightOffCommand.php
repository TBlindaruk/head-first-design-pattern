<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Light;

use Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Command;

/**
 * Class DimmerLightOffCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Light
 */
class DimmerLightOffCommand implements Command
{
    /**
     * @var Light
     */
    private $light;
    /**
     * @var int
     */
    private $prevLevel;

    /**
     * DimmerLightOffCommand constructor.
     *
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
        $this->prevLevel = 100;
    }

    public function execute(): void
    {
        $this->prevLevel = $this->light->getLevel();
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->dim($this->prevLevel);
    }
}
