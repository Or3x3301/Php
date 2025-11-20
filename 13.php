<?php

require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Order.php';

use App\Models\User;
use App\Models\Product;
use App\Models\Order;

$user = new User("Иван Иванов", "ivanov@mail.com");
echo($user->getInfo());

$product1 = new Product("Вода", 32.0);
$product2 = new Product("Соль", 165.5);
echo($product1->getInfo());
echo($product2->getInfo());

$order = new Order(1001, $user);
$order->addProduct($product1);
$order->addProduct($product2);
echo($order->getInfo());

$total = $order->getTotal();
echo("Итого к оплате: $total руб.");

?>