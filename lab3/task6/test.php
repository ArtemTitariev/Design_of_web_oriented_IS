<?php
require_once 'Circle.php';
require_once 'Square.php';
require_once 'Triangle.php';

$circle = new Circle(1, 1, 10, 'black');
$circle->draw();
$circle->move(10, 10);
$circle->draw();
$circle->erase();
echo '<br><br>';

$square = new Square(0, 0, 10, 10, 'yellow');
$square->draw();
$square->move(-2, -4);
$square->draw();
$square->erase();
echo '<br><br>';

$triangle = new Triangle(1.4, 0.5, 5.2, 5.5, 20.8, 19.1, 'white');
$triangle->draw();
$triangle->move();
$triangle->draw();
$triangle->erase();


$circle = null;
$square = null;
$triangle = null;
