<?php

class Person{
	public $idade;
	
    //this method will invoked when you clone a object
	public function __clone() {
		echo "Clonning objects \n";
	}
}

$person1 = new Person();
$person1->idade = 26;

// this copy the reference $person1 and will update it
$person2 = $person1;
$person2->idade = 36;
echo $person1->idade."\n";

// this clone the reference $person1 and will NOT update it
$person3 = clone $person1;
$person3->idade = 46;
echo $person1->idade."\n";
