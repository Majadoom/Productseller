<!DOCTYPE html>


<?php 

include('config.php');

$OrderID = (isset($_GET['OrderID'])) ? $_GET['OrderID'] : "";

$sql = "DELETE FROM orders WHERE OrderID = '$OrderID' ";

$result = $conn->query($sql);
$v1 = ($result == 1) ? 1 : 0;

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
                alert('ดำเนินการ ลบ เสร็จสิ้น');
              
                window.location.replace("order_list.php");


            } else {
                alert('การดำเนิน ลบ การล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>

<?php include('config.php');

$OrderID = (isset($_GET['OrderID'])) ? $_GET['OrderID'] : "";

$sql = "DELETE FROM orders_detail WHERE OrderID = '$OrderID' ";

$result = $conn->query($sql);


?>

