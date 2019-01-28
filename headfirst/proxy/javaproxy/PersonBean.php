<?php
interface PersonBean {
	public function getName();
	public function getGender();
	public function getInterests();
	public function getHotOrNotRating();

	public function setName($name);
	public function setGender($gender);
	public function setInterests($interests);
	public function setHotOrNotRating($rating); 
}
?>