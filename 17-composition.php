<?php

// In composition, a class creates an instance of another class within itself, 
// so when it is destroyed the other will also be destroyed.

class Person {
	
	public function SetName($name) {
		return "The person name is ".$name;
	}
}

class Show {
	public $name;
	public $person;
	
	public function __construct($name) {
		$this->name = $name;
		$this->person = new Person();
	}
	
	public function ShowName() {
		echo $this->person->SetName($this->name);
	}
}

$show = new Show("Mirian Quispe");
$show->ShowName();