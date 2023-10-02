<?php
require_once 'Circle.php';
require_once 'Square.php';
require_once 'Triangle.php';

$circle = new Circle(1, 1, 10, 'black');
$circle->move(10, 10);
$circle->draw();
$circle->erase();
echo '<br><br>';

$square = new Square(0, 0, 10, 10, 'yellow');
$square->move(10, -4);
$square->draw();
$square->erase();
echo '<br><br>';

$triangle = new Triangle(0, 0, 10, 10, 2, 2, 'white');
$triangle->move(10, -4);
$triangle->draw();
$triangle->erase();


$circle = null;
$square = null;
$triangle = null;
