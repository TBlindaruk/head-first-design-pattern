<?php
interface MySubject {
	public function registerObserver(MyObserver $o);
	public function removeObserver(MyObserver $o);
	public function notifyObservers();
}
?>