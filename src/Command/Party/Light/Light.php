<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\Light;

/**
 * Class Light
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light
 */
class Light
{
    /**
     * @var string
     */
    protected $location = '';

    /**
     * Light constructor.
     *
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo $this->location . ' light is on' . PHP_EOL;
    }

    public function off(): void
    {
        echo $this->location . ' light is off' . PHP_EOL;
    }
}
