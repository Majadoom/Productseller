<!DOCTYPE html>
<?php 

include('config.php');

$cus_id   = $_POST['cus_id'];
$cus_name = $_POST['cus_name'];
$cus_buss = $_POST['cus_buss'];
$cus_mail = $_POST['cus_mail'];
$cus_tel  = $_POST['cus_tel'];
$cus_add  = $_POST['cus_add'];
$cus_date = date("Y-m-d H:i:s");
$Name_Up  = $_POST['Name_Up'];


$sql = "UPDATE customer SET ". "cus_name     = '$cus_name', "
                             . "cus_buss     = '$cus_buss', "
                             . "cus_mail     = '$cus_mail', "
                             . "cus_tel      = '$cus_tel', "
                             . "cus_add      = '$cus_add', "
                             . "cus_date     = '$cus_date', "
                             . "Name_Up      = '$Name_Up' "
                             . "WHERE cus_id = '$cus_id'";
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
            if (v1 == 1) {
                alert('การดำเนินการ เสร็จสิ้น');
                window.location.replace("customer_list.php?cus_id=<?php echo $cus_id; ?>");
            } else {
                alert('การดำเนินการ ล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>