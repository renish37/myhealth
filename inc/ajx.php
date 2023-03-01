<?php
include "connection.php";
if(isset($_POST['username'])){
$username = mysqli_real_escape_string($link,$_POST['username']);
$query = "select count(uid) as cntUser from users where username='".$username."'";
$result = mysqli_query($link,$query);
$status = 1;
$msg= "Username is  avaialble";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);
      $count = $row['cntUser'];
      if($count > 0){
         $status = 0;
         $msg= "Username is not avaialble";
      }
   }
   echo json_encode(array('status'=>$status,'msg'=>$msg));
   die;
}