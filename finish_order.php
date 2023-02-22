<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<html>
<head>
<title>PWO Product Seller</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
Finish Your Order. <br><br>

<a href="view_order.php?OrderID=<?php echo $_GET["OrderID"];?>">View Order</a>

 <?php } ?>    