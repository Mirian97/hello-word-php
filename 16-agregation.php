<?php

//in aggregation, one class uses another to perform an action
//, one class uses the other as part of itself

class Product {
	public $name;
	public $value;
	
	public function __construct($name, $value){
		$this->name = $name;
		$this->value = $value;
	}
}

class Cart {
	public $products;
	
	public function AddProduct(Product $product){
		$this->products[] = $product; 
	}
	
	public function ShowCart() {
		foreach($this->products as $product){
			echo $product->name." - R$ ".$product->value."\n";
		}
	}
}

$product1 = new Product("Notebook", "5000");
$product2 = new Product("Travesseiro", "120");

$cart = new Cart();
$cart->AddProduct($product1);
$cart->AddProduct($product2);
$cart->ShowCart();