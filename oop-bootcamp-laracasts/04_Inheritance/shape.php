<?php

abstract class Shape {
	protected $color;

	public function __construct($color = 'red') {
		$this->color = $color;
	}

	public function getColor() {
		return $this->color;
	}

	// contract
	public abstract function getArea();
}

class Square extends Shape {
	protected $length = 4;

	public function getArea() {
		return pow($this->length, 2);
	}
}

class Triangle extends Shape {
	protected $height = 7;
	protected $base = 3;

	public function getArea() {
		return $this->height * $this->base / 2;
	}	
}

class Circle extends Shape {
	protected $radius = 5;

	public function getArea() {
		return M_PI * pow($this->radius, 2);
	}
}

$redSquare = new Square();
$greenSquare = new Square('green');

echo $redSquare->getColor() . "\n";
echo $greenSquare->getColor() . "\n";

echo $redSquare->getArea() . "\n";
echo $greenSquare->getArea() . "\n";

echo (new Triangle())->getArea() . "\n";

$blueCircle = new Circle('blue');

echo $blueCircle->getColor() . "\n";
echo $blueCircle->getArea() . "\n";


?>