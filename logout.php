<?php
include "config.php";

@session_start();

$sql1 = "UPDATE user SET Status = '0' , Date_sta = '0000-00-00 00:00:00' WHERE IDu = '".$_SESSION["UserID"]."'";

$result = mysqli_query($conn,$sql1);

unset($_SESSION["UserID"]);
unset($_SESSION["User"]);   
unset($_SESSION["Firstname"]);   

unset($_SESSION["Userlevel"]);
unset($_SESSION["Idpass"]);
unset($_SESSION["Office"]);

unset($_SESSION["Partwork"]);
unset($_SESSION["Work"]);



@session_destroy(); 



@ob_end_clean();
header("Location: form_login.php ");  
?>

