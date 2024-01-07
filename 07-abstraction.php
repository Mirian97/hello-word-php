<?php

//Cannot create a instance from a abstract class

abstract class Bank {
	protected $saldo;
	protected $juros;
	protected $limiteDeSaque;
	
	public function SetSaldo($s) {
		$this->saldo = $s;
	}
	
	public function GetSaldo() {
		echo "Saldo: R$ ".$this->saldo."\n";
	}
	//when declared abstract attributes or methods the class become abstract
	abstract protected function Sacar($s);
	
	abstract protected function Depositar($s);
}

class Itau extends Bank {
	//always the abstract methods or attributes should implements in children classes
	public function Sacar($s) {
		$this->saldo -= $s;
		echo "Sacou R$ ".$s."\n";
	}
	
	public function Depositar($s) {
		$this->saldo += $s;
		echo "Depositou R$ ".$s."\n";
	}
}

$itau = new Itau();
$itau->SetSaldo(1000);
$itau->GetSaldo();
$itau->Sacar(400);
$itau->GetSaldo();
$itau->Depositar(800);
$itau->GetSaldo();
