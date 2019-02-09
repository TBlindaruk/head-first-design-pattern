<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\CeilingFan;

use Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Command;

/**
 * Class CeilingFanLowCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\CeilingFan
 */
class CeilingFanLowCommand implements Command
{
    /**
     * @var CeilingFan
     */
    private $ceilingFan;
    /**
     * @var int
     */
    private $prevSpeed;

    /**
     * CeilingFanLowCommand constructor.
     *
     * @param CeilingFan $ceilingFan
     */
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->low();
    }

    public function undo(): void
    {
        if ($this->prevSpeed === CeilingFan::HIGH) {
            $this->ceilingFan->high();
        } elseif ($this->prevSpeed === CeilingFan::MEDIUM) {
            $this->ceilingFan->medium();
        } elseif ($this->prevSpeed === CeilingFan::LOW) {
            $this->ceilingFan->low();
        } elseif ($this->prevSpeed === CeilingFan::OFF) {
            $this->ceilingFan->off();
        }
    }
}
