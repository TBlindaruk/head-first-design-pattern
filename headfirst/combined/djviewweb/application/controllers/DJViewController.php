<?php
require_once "models/BeatModel.php";
require_once "custom/mvc/Controller.php";
require_once "custom/mvc/View.php";

class DJViewController extends Controller {
	/**
	 * @var BeatModel
	 */
	private $beatModel;
	
	/*
	 * Note that in PHP, the beatModel instance variable will be created on each
	 * request, since the controller is created anew each time. The model will
	 * take care of its own state, though. This is why the load method is called
	 * on it, to load its state from persistent storage.
	 */
	public function init() {
		$this->beatModel = new BeatModel(DATA_PATH);
		$this->beatModel->load();
	}

	public function changeAction() {
		if ($this->req->getParam("bpm") === NULL) {
			$bpm = $this->beatModel->getBPM();
		} else {
			$bpm = $this->req->getParam("bpm");
		}
		
		if ($this->req->getParam("set") !== NULL) {
			$this->beatModel->setBPM($bpm);
		}
		
		if ($this->req->getParam("decrease") !== NULL) {
			$this->beatModel->setBPM($this->beatModel->getBPM() - 1);
		}
		
		if ($this->req->getParam("increase") !== NULL) {
			$this->beatModel->setBPM($this->beatModel->getBPM() + 1);
		}
		
		if ($this->req->getParam("on") !== NULL) {
			$this->beatModel->on();
		}
		
		if ($this->req->getParam("off") !== NULL) {
			$this->beatModel->off();
		}
		
		/*
		 * The only way to preserve the model's state is to save it. In this
		 * example, it will be saved to disk. But usually it would be saved to a
		 * database.
		 */
		$this->beatModel->save();
		
		$view = new View("DJView");
		$view->setViewPath(APPLICATION_PATH . DIRECTORY_SEPARATOR . "views");
		$view->setAttribute("beatModel", $this->beatModel);
		return $view;
	}
	
	public function indexAction() {
		$view = new View("DJView");
		$view->setViewPath(APPLICATION_PATH . DIRECTORY_SEPARATOR . "views");
		$view->setAttribute("beatModel", $this->beatModel);
		return $view;
	}
}
?>