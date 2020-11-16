<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$user1 = new Employee('Yury','sadf@sdfas.com','1 year');
$user2 = new Employee('Vasily','vasily@mail.com','2 year');
$user3 = new Employee('Denn','denn@mail.com','33 year');

$user1->subscribe('PHP programmer');
$user1->subscribe('Ruby programmer');
$user2->subscribe('PHP programmer');
$user3->subscribe('PHP programmer');
$user3->subscribe('Java programmer');

//$user1->unsubscribe('PHP programmer');
Vacancy::getInstance()->newVacation('PHP programmer');
Vacancy::getInstance()->newVacation('Java programmer');
Vacancy::getInstance()->newVacation('Ruby programmer');

$user2->unsubscribe('PHP programmer');