<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dataB = 'login';

$conectDB=mysqli_connect($server,$username,$password,$dataB);

/*$server = 'localhost';
$username = 'root';
$password = '';
$database = 'login';

try {
  $conectDB = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}*/
