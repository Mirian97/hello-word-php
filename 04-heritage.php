<?php
// Inheritance is a method that allows classes to share generalized methods, attributes, and behaviors

class Vehicle {
	public $model;
	public $year;
	public $color;
	
	public function __construct($model, $year, $color){
		$this->model = $model;
		$this->year = $year;
		$this->color = $color;
	}
	
	public function Run (){
		echo "Ran";
	}
	
	public function Stop (){
		echo "Stopped";
	}
}

class Motorcycle extends Vehicle {
	public function GiveDegree() {
		echo "Giving degree";
	}
}

class Car extends Vehicle {
	public function TurnWindshield() {
		echo "Turning on the windshield";
	}
}

$honda = new Car("BMW", "2023", "white");
var_dump($honda);
$honda->TurnWindshield();
echo "\n\n";

$fazer = new Motorcycle("Fazer", "2023", "red");
var_dump($fazer);
$fazer->GiveDegree();






