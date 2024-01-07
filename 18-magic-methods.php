<?php

class Person {
	private $data;
	
	public function __set($name, $value) {
		$this->data[$name] = $value;
	}
	
	public function __get($name) {
		return $this->data[$name];
	}
	
	public function __tostring() {
		echo "I try to print this object \n";
	}
	
	public function __invoke() {
		echo "I invoke this object as a function \n";
	}
}

$mirian = new Person();
$mirian->name = "Mirian";
$mirian->age = 26;
$mirian->petName = "Belinda";

echo $mirian->name."\n";
echo $mirian->age."\n";
echo $mirian->petName."\n";

echo $mirian();
echo $mirian;