<?php

require_once "data/product.php";

$product = new Product("kereta", 200000000);

// tampilkan product get name
echo $product->getName() . PHP_EOL;
// tampilkan product get price
echo $product->getPrice() . PHP_EOL;
$dummy = new ProductDummy("Dummy", 200000000);
$dummy->info();
