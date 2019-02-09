<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\Stereo;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class StereoOffCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\Stereo
 */
class StereoOffCommand implements Command
{
    /**
     * @var Stereo
     */
    protected $stereo;

    /**
     * StereoOffCommand constructor.
     *
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }

    public function undo(): void
    {
        $this->stereo->on();
    }
}
