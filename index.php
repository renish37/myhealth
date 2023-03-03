<?php
include('inc/connection.php');

if(!isset($_SESSION['username'])){
    header("location: login.php");
}else if($_SESSION['role'] == 'doctor'){
    header("location: doctor_home.php");
}else{
    header("location: patient_home.php");
}

?>