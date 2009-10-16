<?php
class RemoteLoader {
	public static function main(array $args = array()) {
		$remoteControl = new RemoteControl();

		$light = new Light("Living Room");
		$tv = new TV("Living Room");
		$stereo = new Stereo("Living Room");
		$hottub = new Hottub();

		$lightOn = new LightOnCommand($light);
		$stereoOn = new StereoOnCommand($stereo);
		$tvOn = new TVOnCommand($tv);
		$hottubOn = new HottubOnCommand($hottub);
		$lightOff = new LightOffCommand($light);
		$stereoOff = new StereoOffCommand($stereo);
		$tvOff = new TVOffCommand($tv);
		$hottubOff = new HottubOffCommand($hottub);

		$partyOn = array($lightOn, $stereoOn, $tvOn, $hottubOn);
		$partyOff = array($lightOff, $stereoOff, $tvOff, $hottubOff);

		$partyOnMacro = new MacroCommand($partyOn);
		$partyOffMacro = new MacroCommand($partyOff);

		$remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);

		println($remoteControl);
		println("--- Pushing Macro On---");
		$remoteControl->onButtonWasPushed(0);
		println("--- Pushing Macro Off---");
		$remoteControl->offButtonWasPushed(0);
	}
}
?>