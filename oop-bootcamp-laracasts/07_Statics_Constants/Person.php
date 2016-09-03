<?php

class Person {
	public static $age = 1;

	public function haveBirthday() {
		static::$age += 1;
	}
}

$joe = new Person;
$joe->haveBirthday();

//echo $joe->age;  // Not allowed
echo Person::$age . "\n";

$mary = new Person;
$mary->haveBirthday();

echo Person::$age . "\n"; // outputs 3, not 2