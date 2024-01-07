<?php

class Pessoa{
    public $name;
    public $age;

    public function Talk(){
        echo $this->name." de idade de ".$this->age." anos acabou de falar \n\n";
    }
}

$mirian = new Pessoa;
$mirian->name = "Mirian Quispe Montevilla";
$mirian->age = 26;
$mirian->Talk();
var_dump($mirian);