<?php
class TV {
	/**
	 * @var string
	 */
	protected $location;
	/**
	 * @var integer
	 */
	protected $channel;

	public function __construct($location) {
		$this->location = $location;
	}

	public function on() {
		println($this->location . " TV is on");
	}

	public function off() {
		println($this->location . " TV is off");
	}

	public function setInputChannel() {
		$this->channel = 3;
		println($this->location . " TV channel is set for DVD");
	}
}
?>