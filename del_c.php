<!DOCTYPE html>


<?php include('config.php');

$cus_id = (isset($_GET['cus_id'])) ? $_GET['cus_id'] : "";

$sql = "DELETE FROM customer WHERE cus_id = '$cus_id' ";

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
                window.location.replace("customer_list.php");
            } else {
                alert('การดำเนิน ลบ การล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>


