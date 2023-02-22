<!DOCTYPE html>

<?php
@session_start();
include 'config.php';
error_reporting(E_ALL & ~E_NOTICE);
$Username  = $_POST['Username'];
$Password  = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$Lastname  = $_POST['Lastname'];
$Idpass    = $_POST['Idpass'];

$Office    = $_POST['Office'];
$Partwork  = $_POST['Partwork'];
$Work      = $_POST['Work'];

$Phone     = $_POST['Phone'];
$Email     = $_POST['Email'];
$Regidate  = date("Y-m-d H:i:s");
$Userlevel = $_POST['Userlevel'];
$Name_Up   = $_SESSION['UserID']." ".$_SESSION['User'];

$sql = "INSERT INTO user(Username,
                        Password,
                        Firstname,
                        Lastname,
                        Idpass,
                        Office,
                        Partwork,
                        Work,
                        Phone,
                        Email,
                        Regidate,
                        Userlevel,
                        Name_Up) "
        . "VALUES('$Username',
                '$Password',
                '$Firstname',
                '$Lastname',
                '$Idpass',
                '$Office',
                '$Partwork',
                '$Work',
                '$Phone',
                '$Email',
                '$Regidate',
                '$Userlevel',
                '$Name_Up')";


$result = $conn->query($sql);
$v1 = ($result == 1) ? 1 : 0;
//echo $sql;
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Product Seller</title>
    </head>
    <body>
        <script>
            var v1 =<?php echo $v1; ?>;
            if(v1==1){
                alert('การดำเนินการ เสร็จสิ้น');
                window.location.replace("user_list.php");
            
            }else{
                alert('การดำเนินการ ล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>


   