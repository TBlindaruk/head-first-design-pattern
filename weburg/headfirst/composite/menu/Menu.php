<?php
require_once "java/ArrayList.php";

class Menu extends MenuComponent {
	/**
	 * @var ArrayList
	 */
	protected $menuComponents;
	/**
	 * @var string
	 */
	protected $name;
	/**
	 * @var string
	 */
	protected $description;

	public function __construct($name, $description) {
		$this->menuComponents = new ArrayList();
		$this->name = $name;
		$this->description = $description;
	}

	public function add(MenuComponent $menuComponent) {
		$this->menuComponents->add($menuComponent);
	}

	public function remove(MenuComponent $menuComponent) {
		$this->menuComponents->remove($menuComponent);
	}

	public function getChild($i) {
		return $this->menuComponents->get($i);
	}

	public function getName() {
		return $this->name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function myPrint() {
		print("\n" . $this->getName());
		println(", " . $this->getDescription());
		println("---------------------");

		$iterator = $this->menuComponents->iterator();
		while ($iterator->hasNext()) {
			$menuComponent = $iterator->next();
			$menuComponent->myPrint();
		}
	}
}
?>
