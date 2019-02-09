<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\RemoteControl\Hottub;

use Maksi\HeadFirstDesignPattern\Command\RemoteControl\Command;

/**
 * Class HottubOnCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\Hottub
 */
class HottubOnCommand implements Command
{
    /**
     * @var Hottub
     */
    protected $hottub;

    /**
     * HottubOnCommand constructor.
     *
     * @param Hottub $hottub
     */
    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute(): void
    {
        $this->hottub->on();
        $this->hottub->heat();
        $this->hottub->bubblesOn();
    }
}
