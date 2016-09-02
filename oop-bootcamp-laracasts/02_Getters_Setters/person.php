<?php

class Person {
	public $name;
	public $age;

	public function __construct($name) {
		$this->name = $name;
	}

	public function getAge() {
		return $this->age * 365;
	}

	public function setAge($age) {
		if ($age < 18) {
			throw new Exception("Age not legal", 1);
		}

		$this->age = $age;
	}
}

$john = new Person('John');
$john->setAge(30);
// $john->setAge(15); // throws exception
// $john->age = 3; // overwrites age

var_dump($john->getAge());


?>

