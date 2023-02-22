<!DOCTYPE html>  
<?php

include 'config.php'; 

$cus_name = $_POST['cus_name'];
$cus_buss = $_POST['cus_buss'];
$cus_mail = $_POST['cus_mail'];
$cus_tel  = $_POST['cus_tel'];
$cus_add  = $_POST['cus_add'];
$Name_up  = $_POST['Name_up'];
$cus_date =   date("Y-m-d H:i:s");
    
$sql = "INSERT INTO customer(
    cus_name,
    cus_buss,
    cus_mail,
    cus_tel,
    cus_add,
    Name_up,
    cus_date)"
     . "VALUES(
    '$cus_name',
    '$cus_buss',
    '$cus_mail',
    '$cus_tel',
    '$cus_add',
    '$Name_up',
    '$cus_date')";

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
            if(v1==1){
                alert('การดำเนินการ เสร็จสิ้น');
               window.location.replace("customer_list.php?cus_name=<?=$cus_name?>");

            }else{
                alert('การดำเนินการ ล้มเหลว');
               window.history.back();
            }
        </script>
    </body>
</html>
