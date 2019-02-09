<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Light;

/**
 * Class Light
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\Light
 */
class Light
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var int
     */
    private $level;

    /**
     * Light constructor.
     *
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
        $this->level = 0;
    }

    public function on(): void
    {
        $this->level = 100;
        echo 'Light in' . $this->location . ' is on' . PHP_EOL;
    }

    public function off(): void
    {
        $this->level = 0;
        echo 'Light in' . $this->location . ' is off' . PHP_EOL;
    }

    public function dim(int $level): void
    {
        $this->level = $level;
        if ($level === 0) {
            $this->off();
        } else {
            echo 'Light in ' . $this->location . ' is dimmed to ' . $level . '%' . PHP_EOL;
        }
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }
}
