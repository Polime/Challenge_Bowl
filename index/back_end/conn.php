<?php
	session_start();
	$pdo = new PDO("mysql:host=localhost;dbname=older","root","root");
	$pdo->query("set names utf8;");
 ?>