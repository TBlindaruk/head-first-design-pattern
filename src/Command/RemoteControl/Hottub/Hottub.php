<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl\Hottub;

/**
 * Class Hottub
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\Hottub
 */
class Hottub
{
    /**
     * @var boolean
     */
    protected $on = false;

    /**
     * @var int
     */
    protected $temperature = 0;

    public function on(): void
    {
        $this->on = true;
    }

    public function off(): void
    {
        $this->on = false;
    }

    public function bubblesOn(): void
    {
        if ($this->on) {
            echo 'Hottub is bubbling!' . PHP_EOL;
        }
    }

    public function bubblesOff(): void
    {
        if ($this->on) {
            echo 'Hottub is not bubbling' . PHP_EOL;
        }
    }

    public function jetsOn(): void
    {
        if (!$this->on) {
            echo 'Hottub jets are on' . PHP_EOL;
        }
    }

    public function jetsOff(): void
    {
        if ($this->on) {
            echo 'Hottub jets are off' . PHP_EOL;
        }
    }

    /**
     * @param int $temperature
     */
    public function setTemperature(int $temperature): void
    {
        $this->temperature = $temperature;
    }

    public function heat(): void
    {
        $this->temperature = 105;
        echo 'Hottub is heating to a steaming 105 degrees' . PHP_EOL;
    }

    public function cool(): void
    {
        $this->temperature = 98;
        echo 'Hottub is cooling to 98 degrees' . PHP_EOL;
    }
}
