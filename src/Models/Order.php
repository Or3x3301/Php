<?php

namespace App\Models;

class Order {
    public $id;
    public $user;
    private $products = array();
    
    public function __construct($id, $user) {
        $this->id = $id;
        $this->user = $user;
    }
    
    public function addProduct($product) {
        $this->products[] = $product;
    }
    
    public function getTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price;
        }
        return $total;
    }
    
    public function getInfo() {
        return "Заказ №" . $this->id . " для " . $this->user->name;
    }
}

?>