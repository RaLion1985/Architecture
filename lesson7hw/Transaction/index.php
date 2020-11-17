<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$data = new Data("Yury",1000);
$data2 = new Data("Vasily",1600);
$pay= new PaymentTransactionScript();
$pay->action($data);
echo "<hr>";
$pay->action($data2);
