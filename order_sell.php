
<html>
<head>
<title>PWO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "1234";
$dbName = "mydatabase";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
  echo $objCon->connect_error;
  exit();
} ?>

<table width="600"  border="1">
  <tr>
   <h4> รายการขายสินค้าทั้งหมด<h4>
  </tr>
  <tr>
    <td width="3">ProductID</td>
    <td width="100">ProductName</td>
    <td width="3">Size</td>
    <td width="3">Price</td>
    <td width="3">Qty</td>
    <td width="10">Total</td>
  </tr>

<?php
$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM orders_detail WHERE OrderID ";
$objQuery2 = mysqli_query($objCon,$strSQL2);

while($objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))
{
    $strSQL3 = "SELECT * FROM product WHERE ProductID = '".$objResult2["ProductID"]."' ";
    $objQuery3 = mysqli_query($objCon,$strSQL3);
    $objResult3 = $objResult = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);
    $Total = $objResult2["Qty"] * $objResult3["Price"];
    $SumTotal = $SumTotal + $Total;
    ?>
    <tr>
    <td><?=$objResult2["ProductID"];?></td>
    <td><?=$objResult3["ProductName"];?></td>
    <td><?=$objResult3["Size"];?></td>
    <td><?=$objResult3["Price"];?></td>
    <td><?=$objResult2["Qty"];?></td>
    <td><?=number_format($Total,2);?></td>
    </tr>
    <?php
 }
  ?>
</table>
<b>Sum Total <?php echo number_format($SumTotal,2);?><b>

<!-------->
<table width="900"  border="1">
  <tr>
   <h4> รายชื่อลูกค้า <h4>
  </tr>
  <tr>
    <td >ID</td>
    <td >Name</td>
    <td >Business</td>
    <td >E-mail</td>
    <td >Phone</td>
    <td >Address</td>
    <td width="100">Date</td>

  </tr>

<?php
$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM customer WHERE cus_id ";
$objQuery2 = mysqli_query($objCon,$strSQL2);

while($objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))
{

    ?>
    <tr>
    <td><?=$objResult2["cus_id"];?></td>
    <td><?=$objResult2["cus_name"];?></td>
    <td><?=$objResult2["cus_buss"];?></td>
    <td><?=$objResult2["cus_mail"];?></td>
    <td><?=$objResult2["cus_tel"];?></td>
    <td><?=$objResult2["cus_add"];?></td>
    <td><?=date("d-m-Y",strtotime("+543year".$objResult2["cus_date"]));?></td>
      
    </tr>
    <?php
 }
  ?>
</table>
<!-------->

<?php
mysqli_close($objCon);
?>
</body>
</html>