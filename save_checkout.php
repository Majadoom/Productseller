<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>
<?php
@session_start();

$serverName = "localhost";
$userName = "root";
$userPassword = "1234";
$dbName = "mydatabase";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
	echo $objCon->connect_error;
	exit();
}

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO orders (OrderDate,OrderCusID,UserSell,UserSave,Office,Partwork,Work)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtOrderCusID"]."','".$_POST['txtUserSell']."','".$_POST['txtUserSave']."','".$_SESSION["Office"]."','".$_SESSION["Partwork"]."','".$_SESSION["Work"]."') 
  ";
  $objQuery = mysqli_query($objCon,$strSQL);
  if(!$objQuery)
  {
	echo $objCon->error;
	exit();
  }

  $strOrderID = mysqli_insert_id($objCon);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail (OrderID,ProductID,Qty,Price)
				VALUES
				('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."','".$_SESSION["Price"][$i]."')
					";
			  mysqli_query($objCon,$strSQL);
	  }
  }

mysqli_close($objCon);

//session_destroy();
  unset($_SESSION['intLine']);
	unset($_SESSION['strProductID']);
	unset($_SESSION['strQty']);
	unset($_SESSION['Price']);

header("location:order_list.php?OrderID=".$strOrderID);
?>
<?php } ?>