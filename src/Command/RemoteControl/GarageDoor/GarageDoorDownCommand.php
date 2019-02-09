<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl\GarageDoor;

use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Command;

/**
 * Class GarageDoorDownCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\GarageDoor
 */
class GarageDoorDownCommand implements Command
{
    /**
     * @var GarageDoor
     */
    protected $garageDoor;

    /**
     * GarageDoorDownCommand constructor.
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
