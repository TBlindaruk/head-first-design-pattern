<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl\CeilingFan;

use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Command;

/**
 * Class CeilingFanOffCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\CeilingFan
 */
class CeilingFanOffCommand implements Command
{
    /**
     * @var CeilingFan
     */
    protected $ceilingFan;

    /**
     * CeilingFanOffCommand constructor.
     *
     * @param CeilingFan $ceilingFan
     */
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->ceilingFan->off();
    }
}