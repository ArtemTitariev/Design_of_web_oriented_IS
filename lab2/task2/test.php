<?php

require_once 'Point.php';
require_once 'ColorPoint.php';

echo 'Creating Point objects<br>';
$point1 = new Point;
$point2 = new Point(2.44);
$point3 = new Point(-2.0, 3.1);

$point1->print();
echo '<br>';
$point2->print();
echo '<br>';
$point3->print();
echo '<br>';

echo 'Destroying Point objects<br>';
// Destruct objects
$point1 = null;
echo '<br>';
$point2 = null;
echo '<br>';
$point3 = null;
echo '<br><hr>';

echo 'Creating ColorPoint objects<br>';
$point1 = new ColorPoint();
$point2 = new ColorPoint(-1, -2, 'black');

$point1->print();
echo '<br>';
$point2->print();
echo '<br>';

echo 'Destroying ColorPoint objects<br>';
$point1 = null;
echo '<br>';
$point2 = null;
