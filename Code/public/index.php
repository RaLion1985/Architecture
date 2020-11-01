<?php
include "../engine/Autoload.php";

//require_once '../vendor/autoload.php';
include "../config/config.php";
session_start();
use app\model\Products;
use app\model\Users;
use app\engine\Autoload;
use app\engine\Render;
use app\engine\Request;

spl_autoload_register([new Autoload(), 'loadClass']);
try{


//$product = Products::getOne(1)->info("Yury");
//var_dump($product);
    $request = new Request();

    $controllerName = $request->getControllerName()?: 'product';
    $actionName = $request->getActionName();
    $controllerClass = "app\\controllers\\" . ucfirst($controllerName) . "Controller";

//var_dump($controllerClass);
    if (class_exists($controllerClass)) {
        $controller = new $controllerClass(new Render());
        $controller->runAction($actionName);
    }}catch (\PDOException $e){
    echo "Error of PDO ";
    echo $e->getMessage();
    var_dump( $e->getTrace());
}
catch (\Exception $e){
    echo $e->getMessage();
    var_dump( $e->getTrace());
    var_dump($e);
}



















/*
include "../engine/Autoload.php";
include "../config/config.php";
use app\engine\Autoload;
use app\model\DbModel;
use app\model\Products;
use app\model\Users;
use app\model\Orders;
use app\model\Cart;
use app\model\Goods;
require_once "../vendor/autoload.php";
/*


$loader = new \Twig\Loader\FilesystemLoader('../twig');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.tmpl', ['name' => 'Apple' , 'price' => 200]);*/
/*
spl_autoload_register ([new Autoload(), 'loadClass']);

$controllerName = $_GET ['c']?: 'goods';
$actionName = $_GET['a'];

//Для использования Twig
$controllerClass = "app\\controllers\\" . ucfirst($controllerName) . "ControllerTwig";

/* Для обычного движка
$controllerClass = "app\\controllers\\" . ucfirst($controllerName) . "Controller";
 */


/*

//var_dump($controllerClass);
if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName); // Второе значение если true - используем TWIG
}




//$good = new Goods();
/*
$good->img = "05.jpg";
$good->price ="10";
$good->popular=1;
$good->description="adsgadf";
$good->name="Test";
echo "insert";
$good->save();

Реализация метода UPDATE
$good = $good->getOne(1);
$good->img="01.jpg";
$good->popular=1;
$good->save();

*/








