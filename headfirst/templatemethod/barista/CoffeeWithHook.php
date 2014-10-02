<?php
class CoffeeWithHook extends CaffeineBeverageWithHook {
	public function brew() {
		println("Dripping Coffee through filter");
	}

	public function addCondiments() {
		println("Adding Sugar and Milk");
	}

	public function customerWantsCondiments() {
		$answer = $this->getUserInput();

		if (strtolower(substr($answer, 0, 1)) == "y") {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	private function getUserInput() {
		print("Would you like milk and sugar with your coffee (y/n)? ");

		$fr = fopen("php://stdin", "r");
		$answer = rtrim(fgets($fr, 255));
		fclose($fr);

		return $answer;
	}
}
?>