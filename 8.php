<?php

class Product {
    public $name;
    public $price;
    
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$product = new Product("Молоко", 65.5);

echo("Название: $product->name");
echo("Цена: $product->price");

?>