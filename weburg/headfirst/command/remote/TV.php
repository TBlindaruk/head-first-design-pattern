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
		$this->location = location;
	}

	public function on() {
		println("TV is on");
	}

	public function off() {
		println("TV is off");
	}

	public function setInputChannel() {
		$this->channel = 3;
		println("Channel is set for VCR");
	}
}
?>