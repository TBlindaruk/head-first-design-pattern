<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\CeilingFan;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class CeilingFanHighCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\CeilingFan
 */
class CeilingFanHighCommand implements Command
{
    /**
     * @var CeilingFan
     */
    private $ceilingFan;

    /**
     * @var int
     */
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->high();
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
