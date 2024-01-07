<?php

// public => every property and method will be accessible to all those who want to access them

// private => the property or methos it's only access by the class who declared it

// protected => makes all his heirs see the methods and attributes as if they were public

class Vehicle {
	protected $model;
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
	
	public function GetModel(){
		return $this->model;
	}
	
	public function SetModel($m) {
		$this->model = $m;
	}
}

$honda = new Car("BMW", "2023", "white");
$honda->SetModel("Hilux");
echo $honda->GetModel();
echo "\n\n";

var_dump($honda);