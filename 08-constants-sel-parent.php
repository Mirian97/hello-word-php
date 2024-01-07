<?php

class Person {
	const name = "Mirian";
	//shows constant in scope itself
	public function ShowName(){
		echo self::name;
	}
}

class Mirian extends Person {
	const name = "Quispe";
	//shows constant in the parent
	public function ShowName(){
		echo parent::name;
	}
}

$mirian = new Mirian();
$mirian->ShowName();