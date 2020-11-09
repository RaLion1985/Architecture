<?php
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});
$diagonal=6;
echo "Диаметр окружности - $diagonal <br>";

$circleDiameter = new CircleAreaLib();
echo "Площадь по диаметру окружности<br>";
echo $circleDiameter->getCircleArea($diagonal);
echo "<hr>";
echo "Площадь по длине окружности<br>";
$circleLength = new CircleAdapter();
echo $circleLength->CircleArea(M_PI*$diagonal);
echo "<hr>";
echo "<hr> Вычисление площади квадрата";
echo "<hr>";
$side= 4;
$diagonal=$side*sqrt(2);
$squareDiameter = new SquareAreaLib();
echo "Площадь квадрата по диагонали со стороной $side, его диагональ $diagonal <br>";
echo $squareDiameter->getSquareArea($diagonal);
echo "<hr>";
$squareSide = new SquareAdapter();
echo "Площадь квадрата по стороне, со стороной $side <br>";
echo $squareSide->squareArea($side);
