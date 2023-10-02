<?php

$circle = new Circle(1, 1, 10, 'black');
$circle->move(10, 10);
$circle->draw();
$circle->erase();


$square = new Square(0, 0, 10, 10, 'yellow');
$square->move(10, -4);
$square->draw();
$square->erase();

$triangle = new Triangle(0, 0, 10, 10, 2, 2, 'white');
$triangle->move(10, -4);
$triangle->draw();
$triangle->erase();
