<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\Stereo;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class StereoOnWithCDCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\Stereo
 */
class StereoOnWithCDCommand implements Command
{
    /**
     * @var Stereo
     */
    protected $stereo;

    /**
     * StereoOnWithCDCommand constructor.
     *
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }

    public function undo(): void
    {
        $this->stereo->off();
    }
}
