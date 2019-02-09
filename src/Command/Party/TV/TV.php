<?php

declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\TV;

/**
 * Class TV
 *
 * @package Maksi\HeadFirstDesignPattern\Command\Party\TV
 */
class TV
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var int
     */
    private $channel;

    /**
     * TV constructor.
     *
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo $this->location . ' TV is on' . PHP_EOL;
    }

    public function off(): void
    {
        echo $this->location . ' TV is off' . PHP_EOL;
    }

    public function setInputChannel(): void
    {
        $this->channel = 3;
        echo $this->location . ' TV channel is set for DVD' . PHP_EOL;
    }
}
