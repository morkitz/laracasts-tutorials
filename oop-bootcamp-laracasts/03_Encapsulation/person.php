<?php

class Person {
	private $name;
	private $age;

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
$john->age = 3; // cannot overwrite age, since it's declared private in Person class

var_dump($john->getAge());


?>

