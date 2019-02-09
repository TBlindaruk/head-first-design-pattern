<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\Hottub;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class HottubOffCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\Hottub
 */
class HottubOffCommand implements Command
{
    /**
     * @var Hottub
     */
    protected $hottub;

    /**
     * HottubOffCommand constructor.
     *
     * @param Hottub $hottub
     */
    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute(): void
    {
        $this->hottub->cool();
        $this->hottub->off();
    }

    public function undo(): void
    {
        $this->hottub->on();
    }
}
