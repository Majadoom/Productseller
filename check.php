<?php
include("config.php");

if(isset($_POST['Username'])){
   $Username = mysqli_real_escape_string($conn,$_POST['Username']);

   $query = "SELECT count(*) as cntUser from user where Username='".$Username."'";

   $result = mysqli_query($conn,$query);

   echo "<script>";
   $response = "<span style='color: green;'> Username ใช้ได้</span>";
   echo " $('.btn-save').attr('disabled',false)";
   echo "</script>";

   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){

		echo "<script>";
      	$response = "<span style='color: red;'> Username ถูกใช้แล้ว</span>";
        echo " $('.btn-save').attr('disabled',true)";
        echo "</script>";
        
      }
   				

   }

   echo $response;
   die;
}