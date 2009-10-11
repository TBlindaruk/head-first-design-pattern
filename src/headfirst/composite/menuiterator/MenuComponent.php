<?php
abstract class MenuComponent {
	public function add(MenuComponent $menuComponent) {
		throw new BadMethodCallException();
	}
	public function remove(MenuComponent $menuComponent) {
		throw new BadMethodCallException();
	}
	public function getChild($i) {
		throw new BadMethodCallException();
	}

	public function getName() {
		throw new BadMethodCallException();
	}
	public function getDescription() {
		throw new BadMethodCallException();
	}
	public function getPrice() {
		throw new BadMethodCallException();
	}
	public function isVegetarian() {
		throw new BadMethodCallException();
	}

	public function myPrint() {
		throw new BadMethodCallException();
	}
}
