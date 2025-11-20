<?php

interface Payable {
    public function pay($amount);
}

class CashPayment implements Payable {
    public function pay($amount) {
        echo("Оплата наличными: $amount");
        return true;
    }
}

class CryptoPayment implements Payable {
    public function pay($amount) {
        echo("Оплата криптой: $amount");
        return true;
    }
}

$cashPayment = new CashPayment();
$cryptoPayment = new CryptoPayment();

$cashPayment->pay(130.50);
$cryptoPayment->pay(1.50);

?>