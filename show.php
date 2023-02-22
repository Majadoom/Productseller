<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "show";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการข้อมูลสินค้า</h1>
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
<a class="btn btn-info btn-xl" onclick="javascript:window.print()">
<i class="fas fa-regular fa-print fa-xl"></i></a>
<div align="center">
  <a href="product.php" class="btn btn-primary btn-xl"><i class="fas fa-clipboard-list fa-2x"></i> รายการสินค้า </a>
  
</div>
<?php

if(!isset($_SESSION["intLine"]))
{
	echo "<center>!!! ไม่มีพบ รายการสินค้า</center>";
}

$serverName   = "localhost";
$userName     = "root";
$userPassword = "1234";
$dbName       = "mydatabase";

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
    <td width="5">เลขที่สินค้า</td>
    <td width="30">ชื่อสินค้า</td>
    <td width="5">ขนาด/ปริมาณ</td>
    <td width="5">ราคา</td>
    <td width="30">จำนวน</td>
    <td width="5"></td>
    <td width="5"></td>
    <td width="5">ราคารวม</td>
    <td width="5"></td>
  </tr>
  <?php
  error_reporting(E_ALL & ~E_NOTICE);
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
	  ?>
	  <tr>
		<td><?=$_SESSION["strProductID"][$i];?></td>
		<input type="text" name="strProductID" value="<?=$_SESSION["strProductID"][$i];?>" hidden>
		<td><?=$objResult["ProductName"];?></td>
		<td><?=$objResult["Size"];?></td>
		<td><?=$objResult["Price"];?></td>
		<td>
    <!---update qty--->
    <?=$_SESSION["strQty"][$i];?>&nbsp;
     
    &nbsp;
		
		</td>

		<td><a href="qtydel.php?ProductID=<?php echo $objResult["ProductID"];?>"><i class="fas fa-minus fa-2x"></i></a></td>
		<td><a href="qtyup.php?ProductID=<?php echo $objResult["ProductID"];?>"><i class="fas  fa-plus fa-2x"></i></a></td>

		<td><?=number_format($Total,2);?></td>
		<td><a href="delete.php?Line=<?=$i;?>">ลบ</a></td>
	  </tr>
	  <?php
	  }
  }
  ?>
  
</table>

<div align="right">
<b>	ราคาทั้งสิ้นรวม = </b>
<input type="text" value="<?php echo number_format($SumTotal,2);?>" disabled="disabled" readonly="readonly">
	

</div>
<br>
<?php
	if($SumTotal > 0)
	{
?>
<div align="right">
  <a href="checkout.php" class="btn btn-success btn-xl"><i class="fas fa-file-invoice-dollar fa-2x"></i> สรุปรายการสั่งซื้อ </a>
</div>
	


<?php
	}
?>
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