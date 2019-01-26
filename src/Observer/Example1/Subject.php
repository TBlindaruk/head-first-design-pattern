<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Observer\Example1;

/**
 * Interface Subject
 *
 * @package Maksi\HeadFirstDesignPattern\Observer\Example1
 */
interface Subject
{
    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer): void;

    /**
     * @param Observer $observer
     */
    public function removeObserver(Observer $observer): void;

    /**
     * @return void
     */
    public function notifyObservers(): void;
}
