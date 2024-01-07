<?php

//access an object from another object

class Customer {
	public $name;
	public $address;
}

class Order {
	public $number;
	public $customer;
}

$customer = new Customer();
$customer->name = "Mirian Quispe";
$customer->address = "Rua dos Cravos, n: 100";

$order = new Order();
$order->number = 115;
$order->customer = $customer;

$dados = array(
	"order_number" => $order->number,
	"order_name_customer" => $order->customer->name,
	"order_address_customer" => $order->customer->address
	);

var_dump($dados);

//print
// array(3) {
//     ["order_number"]=>
//     int(115)
//     ["order_name_customer"]=>
//     string(13) "Mirian Quispe"
//     ["order_address_customer"]=>
//     string(22) "Rua dos Cravos, n: 100"
//   }
  