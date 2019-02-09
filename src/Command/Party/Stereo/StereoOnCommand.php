<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\Stereo;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class StereoOnCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Party\Stereo
 */
class StereoOnCommand implements Command
{
    /**
     * @var Stereo
     */
    private $stereo;

    /**
     * StereoOnCommand constructor.
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
    }

    public function undo(): void
    {
        $this->stereo->off();
    }
}
