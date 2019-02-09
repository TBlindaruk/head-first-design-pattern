<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\SimpleControl;

/**
 * Class GarageDoorOpenCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Example1
 */
class GarageDoorOpenCommand implements Command
{
    /**
     * @var GarageDoor
     */
    protected $garageDoor;

    /**
     * GarageDoorOpenCommand constructor.
     *
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->up();
    }
}