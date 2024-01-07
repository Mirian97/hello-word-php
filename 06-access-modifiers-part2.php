<?php

class Vehicle {
	protected $model;
	public $year;
	public $color;
	
	public function __construct($model, $year, $color){
		$this->model = $model;
		$this->year = $year;
		$this->color = $color;
	}
	
	protected function Run (){
		echo "Ran";
	}
	
	public function Stop (){
		echo "Stopped";
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
	//protected methods can be access by heritage
	public function ShowAction (){
		$this->Run();
	}
}

$honda = new Car("BMW", "2023", "white");
$honda->Run(); //this work!
