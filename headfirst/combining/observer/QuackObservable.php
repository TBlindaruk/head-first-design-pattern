<?php
interface QuackObservable {
	public function registerObserver(Observer $observer);
	public function notifyObservers();
}
?>