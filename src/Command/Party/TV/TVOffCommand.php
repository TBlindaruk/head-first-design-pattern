<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\TV;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class TVOffCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Party\TV
 */
class TVOffCommand implements Command
{
    /**
     * @var TV
     */
    private $tv;

    /**
     * TVOffCommand constructor.
     *
     * @param TV $tv
     */
    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute(): void
    {
        $this->tv->off();
    }

    public function undo(): void
    {
        $this->tv->on();
    }
}
