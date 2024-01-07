<?php

require "classes/product.php";
require "models/product.php";

use classes\Product as ProductClass;
use models\Product as ProductModel;

// $product1 = new \classes\Product();
$product1 = new ProductClass();
$product1->ShowDetails();

// $product2 = new \models\Product()
$product2 = new ProductModel();
$product2->ShowDetails();