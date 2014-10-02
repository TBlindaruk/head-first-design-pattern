<?php
class PersonBeanImpl implements PersonBean {
	protected $name;
	protected $gender;
	protected $interests;
	protected $rating;
	protected $ratingCount = 0;

	public function getName() {
		return $this->name;
	}

	public function getGender() {
		return $this->gender;
	}

	public function getInterests() {
		return $this->interests;
	}

	public function getHotOrNotRating() {
		if ($this->ratingCount == 0) return 0;
		return ($this->rating / $this->ratingCount);
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setGender($gender) {
		$this->gender = $gender;
	}

	public function setInterests($interests) {
		$this->interests = $interests;
	}

	public function setHotOrNotRating($rating) {
		$this->rating += $rating;
		$this->ratingCount++;
	}
}
?>