<?php
session_start();
//print_r($_SESSION);
global $con;
//create a connection

// for local 
$user = 'root';
$password = '';
$db = 'myhealth';
$host = 'localhost';

// for server 
// $user = 'epiz_34004417';
// $password = 'E7gjd1jNaDtlYfG';
// $db = 'epiz_34004417_myhealthdb';
// $host = 'sql110.epizy.com';

$con = mysqli_connect($host,$user,$password,$db);


if(!$con){
  echo "Database connection error";
}


?>




