<?php include('config.php');

$OrderID = (isset($_GET['OrderID'])) ? $_GET['OrderID'] : "";

$sql = "DELETE FROM orders_detail WHERE OrderID = '$OrderID' ";

$result = $conn->query($sql);


?>