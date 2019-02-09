<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl\GarageDoor;

use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Command;

/**
 * Class GarageDoorUpCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\GarageDoor
 */
class GarageDoorUpCommand implements Command
{
    /**
     * @var GarageDoor
     */
    protected $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->up();
    }
}
