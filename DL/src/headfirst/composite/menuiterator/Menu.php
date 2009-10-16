<?php
require_once "java/ArrayList.php";
require_once "java/MyIterator.php";

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
	/**
	 * @var MyIterator
	 */
	protected $iterator = NULL;

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

	public function createIterator() {
		if ($this->iterator == NULL) {
			$this->iterator = new CompositeIterator($this->menuComponents->iterator());
		}
		return $this->iterator;
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
