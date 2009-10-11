<?php
class TeaWithHook extends CaffeineBeverageWithHook {
	public function brew() {
		println("Steeping the tea");
	}

	public function addCondiments() {
		println("Adding Lemon");
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
		// get the user's response
		print("Would you like lemon with your tea (y/n)? ");

		$fr = fopen("php://stdin", "r");
		$answer = rtrim(fgets($fr, 255));
		fclose($fr);

		return $answer;
	}
}
?>