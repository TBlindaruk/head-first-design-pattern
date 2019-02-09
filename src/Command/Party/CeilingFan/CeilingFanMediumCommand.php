<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\CeilingFan;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class CeilingFanMediumCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\CeilingFan
 */
class CeilingFanMediumCommand implements Command
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
        $this->ceilingFan->medium();
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
