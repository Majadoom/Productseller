<!DOCTYPE html>
<?php include('config.php');

$ProductID    = $_POST['ProductID'];
$ProductName  = $_POST['ProductName'];
$Size         = $_POST['Size'];
$Price        = $_POST['Price'];
$Name_Up      = $_POST['Name_Up'];


$sql = "UPDATE product SET "
                            . "ProductName     = '$ProductName', "
                            . "Price           = '$Price' , "
                            . "Size            = '$Size', "
                            . "Name_Up         = '$Name_Up' "
                            . "WHERE ProductID = '$ProductID'";
$result = $conn->query($sql);
$v1 = ($result == 1) ? 1 : 0;
//echo $sql;
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Pwo</title>
    </head>
    <body>
        <script>
            var v1 =<?php echo $v1; ?>;
            if (v1 == 1) {
                alert('การดำเนินการเสร็จสิ้น');
                window.location.replace("edit_p.php?ProductID=<?php echo $ProductID; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>