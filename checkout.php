<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "checkout";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> ยอดสั่งซื้อสินค้า</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<html>
<head>
<title>PWO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<div align="left">
  <a href="show.php" class="btn btn-primary btn-xl"><i class="fas fa-clipboard-list fa-2x"></i> รายการสินค้า </a>
  
</div>
<?php

if(!isset($_SESSION["intLine"]))
{
	echo "Cart Empty || ว่าง";
	exit();
}

$serverName = "localhost";
$userName = "root";
$userPassword = "1234";
$dbName = "mydatabase";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
    echo $objCon->connect_error;
    exit();
}
?>
<div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >

<thead>
<tr role="row" class="info">
    <td width="20">ProductID</td>
    <td width="102">ProductName</td>
    <td width="20">Price</td>
    <td width="20">Qty</td>
    <td width="20">Total</td>
  </tr>
  <?php
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM product WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";

		$objQuery = mysqli_query($objCon,$strSQL);
		$objResult = $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
		$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
		$SumTotal = $SumTotal + $Total;

    $_SESSION["Price"][$i] = $objResult["Price"]; /**plus**/

	  ?>
	  <tr>
		<td><?=$_SESSION["strProductID"][$i];?></td>
		<td><?=$objResult["ProductName"];?></td>
		<!--td><?=$objResult["Price"];?></td-->
    <td><?=$_SESSION["Price"][$i];?></td>
		<td><?=$_SESSION["strQty"][$i];?></td>
		<td><?=number_format($Total,2);?></td>
	  </tr>
	  <?php

	  }
  }

  ?>
</table>
<div align="right">
  <b>Sum Total = </b><input type="test" value="<?php echo number_format($SumTotal,2);?>" style="width: 90px;" disabled="disabled" readonly="readonly">
</div>
 
<br><br>
<?php 

include'config.php';

$sql2 = "SELECT * FROM customer";
$result2 =$conn->query($sql2);
$row2 = $result2->fetch_array(MYSQLI_ASSOC); 

if ($_SESSION['Userlevel'] == 2 || 3 || 5 || 6) {

$sql = "SELECT * FROM user WHERE Office = '".$_SESSION['Office']."' and Partwork = '".$_SESSION['Partwork']."' and Work = '".$_SESSION['Work']."'";

}
if ($_SESSION['Userlevel'] == 1) {

$sql = "SELECT * FROM user WHERE Office";

}

$result =$conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

?>

<form name="form1" method="post" action="save_checkout.php">
  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >
       <tr>
      <td style="width: 100px;">ลูกค้า
      <select id="txtOrderCusID" name="txtOrderCusID" class="form-control is-warning" style="width: 300px;"required>
  <option value="">...</option>
    <?php foreach($result2 as $row2) { ?>
      <option value="<?=$row2['cus_id'];?>"><?php echo $row2['cus_id']." ".$row2['cus_buss'];?></option>
    <?php } ?>
</select></td>
<tr>
<td>
  ผู้ขาย
  <select id="txtUserSell" name="txtUserSell" class="form-control is-warning" style="width: 300px;" required>
  <option value="">...</option>
    <?php foreach($result as $row) { ?>
      <option value="<?=$row['IDu']." ".$row['Firstname']." ".$row['Lastname'];?>"><?php echo $row['IDu']." ".$row['Firstname']." ".$row['Lastname'];?></option>
    <?php } ?>
</select>
</td>
<tr>
<td>
  สำนัก
<input type="text" name="Office" value="<?php echo $Officename[$_SESSION['Office']];?>"class="form-control is-warning" style="width: 300px;"readonly="readonly">
</td>
</tr>
<tr>
<td>
  ส่วนงาน
  <input type="text" name="Partwork" value="<?php echo $Partworkname[$_SESSION['Partwork']];?>"class="form-control is-warning" style="width: 300px;"readonly="readonly">
</td>
</tr>
<tr>
<td>
  งาน
  <input type="text" name="Work" value="<?php echo $Workname[$_SESSION['Work']];?>"class="form-control is-warning" style="width: 300px;"readonly="readonly">
</td>
</tr>
</tr>
<tr>
<td>
  ผู้บันทึก

<input type="text" name="txtUserSave" value="<?php echo $_SESSION['UserID']." ".$_SESSION['User']; ?>" class="form-control is-warning" style="width: 300px;" disabled="disabled" readonly="readonly">
<input type="text" name="txtUserSave" value="<?php echo $_SESSION['UserID']." ".$_SESSION['User']; ?>" class="form-control is-warning" style="width: 300px;" hidden>
</td>
</tr>


    </tr>
  
  </table><br>
    <input type="submit" value="Submit" class="btn btn-success btn-lg">
</form>
<?php
mysqli_close($objCon);
?>
          </div>
        
          <div class="col-md-1" >    
          </div>
        </div>
      </div>      
    </div>  
  </div>
  <!-- /.col -->
</div>
</section>
<!-- /.content -->
<?php include('footer.php'); ?>
<script>
$(function () {
$(".datatable").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false,
});
});
</script>

</body>
</html>
<?php } ?>