<?php

$pdo;
try {
	$pdo  = new PDO("mysql:host=localhost;dbname=lab8", 'root', '');
} catch (PDOException $e) {
	echo "Connection failed";
}
