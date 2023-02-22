<!DOCTYPE html>
<?php

include 'config.php'; 

$ProductName = $_POST['ProductName'];
$Size        = $_POST['Size'];
$Price       = $_POST['Price'];
$Name_Up     = $_POST['Name_Up'];


$sql = "INSERT INTO product(
    ProductName,
    Size,
    Price,
    Name_Up) "
     . "VALUES(
    '$ProductName',
    '$Size',
    '$Price',
    '$Name_Up')";

$result = $conn->query($sql);
$v1 = ($result == 1) ? 1 : 0;
//echo $sql;
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>PWO</title>
    </head>
    <body>
        <script>

            var v1 =<?php echo $v1; ?>;
            if(v1==1){
                alert('การดำเนินการเสร็จสิ้น');
              window.location.replace("user_page.php?ProductName=<?php echo $ProductName; ?>");

            }else{
                alert('การดำเนินการล้มเหลว');
             window.history.back();
            }
        </script>
    </body>
</html>
