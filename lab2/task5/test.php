<?php

require_once 'Point.php';
require_once 'ColorPoint.php';

echo 'Creating objects<br>';
$point1 = new Point(-2.0, 3.1);
$point2 = new ColorPoint(-1, -2, 'red');
echo '<br>';


echo "Call static getter for Point obj<br>";
echo $point1::getStatic() . '<br>';
echo "Call static counter and getter for Point class<br>";
Point::counter();
echo Point::getStatic() . '<br>';

echo "Call static getter for ColorPoint obj<br>";
echo ColorPoint::getStatic() . '<br>';

echo "Call static counter and getter for ColorPoint class<br>";
ColorPoint::counter();
echo ColorPoint::getStatic() . '<br>';

echo '<br><hr>';


echo 'Destroying objects<br>';
$point1 = null;
echo '<br>';
$point2 = null;
