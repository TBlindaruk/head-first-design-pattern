<?php
interface BeatModelInterface {
	public function on();

	public function off();

	public function setBPM($bpm);

	public function getBPM();
}
?>