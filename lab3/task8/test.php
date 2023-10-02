<?php
require_once 'Point.php';

echo 'create point<br>';
$point = new Point();
$point->render();
echo '<br><br>';

echo 'set another coordinates<br>';
$point->setX(-32.64);
$point->setY(22.8);
$point->render();
echo '<br><br>';


$xMove = 10;
$yMove = -4;
echo "moving point: xMove = {$xMove}, yMove = {$yMove}";
echo '<br>';
$point->move($xMove, $yMove);
$point->render();
echo '<br><br>';

$point = null;
