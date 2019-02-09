<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl\Stereo;

use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Command;

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
}
