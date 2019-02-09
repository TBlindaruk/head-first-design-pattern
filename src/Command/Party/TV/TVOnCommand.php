<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\TV;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class TVOnCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Party\TV
 */
class TVOnCommand implements Command
{
    /**
     * @var
     */
    private $tv;

    /**
     * TVOnCommand constructor.
     *
     * @param TV $tv
     */
    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute(): void
    {
        $this->tv->on();
        $this->tv->setInputChannel();
    }

    public function undo(): void
    {
        $this->tv->off();
    }
}
