<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$order1 = new Order(10000,7965882);
$order2 = new Order(688.55,12354);
echo "Заказ №1 <br>";
$order1->pay(new webmoney());
$order1->pay(new kiwi());
$order1->pay(new yandex());

echo "<hr>Заказ №2 <br>";
$order2->pay(new webmoney());
$order2->pay(new kiwi());
$order2->pay(new yandex());