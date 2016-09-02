<?php

class Person {
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}
}

class Business {
	protected $staff;

	public function __construct(Staff $staff) {
		$this->staff = $staff;
	}

	public function hire(Person $person) {
		$this->staff->add($person);
	}
}

class Staff {
	protected $members = [];

	public function __construct($members = []) {
		$this->members = $members;
	}

	public function add(Person $person) {
		$this->members[] = $person;
	}

	public function getMembers() {
		return $this->members;
	}
}

$me = new Person("Marko Burazin");
$staff = new Staff([$me]);

$flafica = new Person("Flafica Manckin");

$webdev = new Business($staff);
$webdev->hire($flafica);

var_dump($webdev);
var_dump($staff->getMembers());

?>