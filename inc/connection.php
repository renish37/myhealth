<?php
session_start();
//print_r($_SESSION);
global $con;
//create a connection

$user = 'root';
$password = '';
$db = 'myhealth';
$host = 'localhost';
// $user = 'test';
// $password = 'test';
// $db = 'myhealth';
// $host = 'localhost';
// $port = 3306;

$con = mysqli_connect($host,$user,$password,$db);


if(!$con){
  echo "Database connection error";
}


?>




