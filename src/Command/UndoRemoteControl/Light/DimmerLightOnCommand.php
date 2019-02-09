<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Light;

use Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Command;

/**
 * Class DimmerLightOnCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Light
 */
class DimmerLightOnCommand implements Command
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
     * DimmerLightOnCommand constructor.
     *
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
        $this->prevLevel = 0;
    }

    public function execute(): void
    {
        $this->prevLevel = $this->light->getLevel();
        $this->light->dim(75);
    }

    public function undo(): void
    {
        $this->light->dim($this->prevLevel);
    }
}
