<?php
session_start();
$_POST['message'] = trim($_POST['message']);

if ($_POST['message'] != '') {
	require_once 'FileLoger.php';

	$loger = new FileLoger('data.txt');

	$loger->log($_POST['message']);
	$loger = null;

	$_SESSION['status'] = 'ok';
} else {
	$_SESSION['status'] = 'empty';
}

header('Location: index.php');
