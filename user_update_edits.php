<!DOCTYPE html>
<?php include('config.php');

$IDu       = $_POST['IDu'];
$Username  = $_POST['Username'];
$Password  = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$Lastname  = $_POST['Lastname'];
$Idpass    = $_POST['Idpass'];
$Phone     = $_POST['Phone'];
$Email     = $_POST['Email'];
$Userlevel = $_POST['Userlevel'];
$Name_Up   = $_POST['Name_Up'];



$sql = "UPDATE user SET "

        . "Username     = '$Username', "
        . "Password     = '$Password', "
        . "Firstname    = '$Firstname', "
        . "Lastname     = '$Lastname', "
        . "Idpass       = '$Idpass', "
        . "Phone        = '$Phone', "
        . "Email        = '$Email', "
        . "Userlevel    = '$Userlevel', "
        . "Name_Up      = '$Name_Up' "
        . "WHERE IDu    = '$IDu'";
        
$result = $conn->query($sql);
$v1 = ($result == 1) ? 1 : 0;
//echo $sql;
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>PWO Product Seller</title>
    </head>
    <body>
        <script>
            var v1 =<?php echo $v1; ?>;
            if (v1 == 1) {
                alert('การดำเนินการ เสร็จสิ้น');

                window.location.replace("user_detail_edits.php?IDu=<?php echo $_SESSION["UserID"]=$IDu; ?>");
            } else {
                alert('การดำเนินการ ล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>