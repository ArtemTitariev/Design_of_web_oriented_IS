<?php

require_once 'SomeClass.php';

$obj = SomeClass::getInstance();
$obj2 = SomeClass::getInstance();
$obj3 = $obj2;

echo 'Comparing objects:<br>';

if ($obj === $obj2) {
	echo '$obj === $obj2<br>';
}

if ($obj === $obj3) {
	echo '$obj === $obj3<br>';
}