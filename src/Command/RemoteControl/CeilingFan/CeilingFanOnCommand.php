<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl\CeilingFan;

use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Command;

/**
 * Class CeilingFanOnCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\CeilingFan
 */
class CeilingFanOnCommand implements Command
{
    /**
     * @var CeilingFan
     */
    protected $ceilingFan;

    /**
     * CeilingFanOnCommand constructor.
     *
     * @param CeilingFan $ceilingFan
     */
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->ceilingFan->high();
    }
}
