<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Light;

use Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Command;

/**
 * Class LightOffCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Light
 */
class LightOffCommand implements Command
{
    /**
     * @var Light
     */
    private $light;

    /**
     * @var int
     */
    private $level;

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
        $this->level = $this->light->getLevel();
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->dim($this->level);
    }
}
