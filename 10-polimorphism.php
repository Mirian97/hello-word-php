<?php
// Polymorphism is rewriting or replacing a method from parent class

class Animal {
	public function Walk() {
		echo "The animal is walking!";
	}
	
	public function Run() {
		echo "The animal is running!";
	}
}

class Horse extends Animal {
	public function Walk(){
		echo "The horse is walking!";
	}
	
	public function ShowAction() {
		$this->Run();
	}
}

$horse = new Horse();
$horse->Walk();
$horse->ShowAction();