<?php
class HomeTheaterFacade {
	/**
	 * @var Amplifier
	 */
	protected $amp;
	/**
	 * @var Tuner
	 */
	protected $tuner;
	/**
	 * @var DvdPlayer
	 */
	protected $dvd;
	/**
	 * @var CdPlayer
	 */
	protected $cd;
	/**
	 * @var Projector
	 */
	protected $projector;
	/**
	 * @var TheaterLights
	 */
	protected $lights;
	/**
	 * @var Screen
	 */
	protected $screen;
	/**
	 * @var PopcornPopper
	 */
	protected $popper;

	public function __construct(Amplifier $amp, 
			Tuner $tuner, 
			DvdPlayer $dvd, 
			CdPlayer $cd, 
			Projector $projector, 
			Screen $screen,
			TheaterLights $lights,
			PopcornPopper $popper) {

		$this->amp = $amp;
		$this->tuner = $tuner;
		$this->dvd = $dvd;
		$this->cd = $cd;
		$this->projector = $projector;
		$this->screen = $screen;
		$this->lights = $lights;
		$this->popper = $popper;
	}

	public function watchMovie($movie) {
		println("Get ready to watch a movie...");
		$this->popper->on();
		$this->popper->pop();
		$this->lights->dim(10);
		$this->screen->down();
		$this->projector->on();
		$this->projector->wideScreenMode();
		$this->amp->on();
		$this->amp->setDvd($this->dvd);
		$this->amp->setSurroundSound();
		$this->amp->setVolume(5);
		$this->dvd->on();
		$this->dvd->play($movie);
	}

	public function endMovie() {
		println("Shutting movie theater down...");
		$this->popper->off();
		$this->lights->on();
		$this->screen->up();
		$this->projector->off();
		$this->amp->off();
		$this->dvd->stop();
		$this->dvd->eject();
		$this->dvd->off();
	}

	public function listenToCd($cdTitle) {
		println("Get ready for an audiopile experence...");
		$this->lights->on();
		$this->amp->on();
		$this->amp->setVolume(5);
		$this->amp->setCd($this->cd);
		$this->amp->setStereoSound();
		$this->cd->on();
		$this->cd->play($cdTitle);
	}

	public function endCd() {
		println("Shutting down CD...");
		$this->amp->off();
		$this->amp->setCd($this->cd);
		$this->cd->eject();
		$this->cd->off();
	}

	public function listenToRadio($frequency) {
		println("Tuning in the airwaves...");
		$this->tuner->on();
		$this->tuner->setFrequency($frequency);
		$this->amp->on();
		$this->amp->setVolume(5);
		$this->amp->setTuner($this->tuner);
	}

	public function endRadio() {
		println("Shutting down the tuner...");
		$this->tuner->off();
		$this->amp->off();
	}
}
?>