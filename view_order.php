<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{ ?>

<?php

$menu = "view_order";

?>

<?php include('u_header.php'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">

  <div class="container-fluid"> 

    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการสั่งซื้อสินค้า</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
<a class="btn btn-info btn-xl" onclick="javascript:window.print()">
<i class="fas fa-regular fa-print fa-xl"></i>
</a>

<html>
<head>
<title>PWO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
error_reporting(0);
$serverName = "localhost";
$userName = "root";
$userPassword = "1234";
$dbName = "mydatabase";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
  echo $objCon->connect_error;
  exit();
}

$strSQL = "SELECT * FROM orders WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>

<div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">

<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info"  >
  <thead>

    <tr>
      <td width="20">เลขที่สั่งซื้อ</td>
      <td width="500">
    <?=$objResult["OrderID"];?></td>
    </tr>  

    <tr>
      <td width="20">วันที่สั่งซื้อ</td>
      <td width="500">
    <?=$objResult["OrderDate"]=date("d/m/Y [ H:i:s ]",strtotime("+543year".$objResult["OrderDate"]));?></td>
    </tr> 
    
      <tr>
      <td width="20">เลขที่ลูกค้า</td>
      <td width="500">
    <?=$objResult["OrderCusID"];?></td>
    </tr>

    <?php 
if ($objResult["OrderCusID"]) {



$strSQL = "SELECT * FROM customer WHERE cus_id = '".$objResult["OrderCusID"]."' ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
}
     ?>
   <tr>
      <td width="20">บริษัท/หน่วยงาน</td>
      <td width="500">
    <?=$objResult["cus_buss"];?></td>
    </tr>
    <tr>
      <td width="20">ชื่อลูกค้า</td>
      <td width="500">
    <?=$objResult["cus_name"];?></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><?=$objResult["cus_add"];?></td>
    </tr>
    <tr>
      <td>เบอร์โทร</td>
      <td><?=$objResult["cus_tel"];?></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><?=$objResult["cus_mail"];?></td>
    </tr>
  <?php 

include"config.php";

$strSQL = "SELECT * FROM orders WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>

    <tr>
      <td>สำนัก</td>
      <td width="500">
    <?=$Officename[$objResult["Office"]];?></td>
    </tr>

    <tr>
      <td>ส่วนงาน</td>
      <td width="500">
    <?=$Partworkname[$objResult["Partwork"]];?></td>
    </tr>

    <tr>
      <td>งาน</td>
      <td width="500">
    <?=$Workname[$objResult["Work"]];?></td>
    </tr>
  
    <tr>
      <td>ผู้ขาย</td>
      <td width="500">
    <?=$objResult["UserSell"];?></td>
    </tr>

    <tr>
      <td>ผู้บันทึก</td>
      <td width="500">
    <?=$objResult["UserSave"];?></td>
    </tr>
  </table>

  <br>

<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >
  <tr>
    <td width="5">NO.</td>
    <td width="5">เลขที่สินค้า</td>
    <td width="50">ชื่อสินค้า</td>
    <td width="5">ขนาด/ปริมาณ</td>
    <td width="5">ราคา</td>
    <td width="5">จำนวน</td>
    <td width="5">ราคารวม</td>
  </tr>

<?php

$Total = 0;
$SumTotal = 0;


$strSQL2 = "SELECT * FROM orders_detail WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery2 = mysqli_query($objCon,$strSQL2);

$count_row = 1;
while($objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))

{
    

   

$strSQL3 = "SELECT * FROM product WHERE ProductID = ".$objResult2["ProductID"]." ";
$objQuery3 = mysqli_query($objCon,$strSQL3);
$objResult3 = $objResult = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);


    $Total = $objResult2["Qty"] * $objResult2["Price"];
    $SumTotal = $SumTotal + $Total;

    ?>
    <tr>
    <td><?=$count_row;?></td>
    <td><?=$objResult2["ProductID"];?></td>

    <td><?=$objResult3["ProductName"];?></td>
    <td><?=$objResult3["Size"];?></td>
    <td><?=$objResult2["Price"];?></td>

    <td><?=$objResult2["Qty"];?></td>
    <td><?=number_format($Total,2);?></td>
    </tr>
<?php
 $count_row++;    
               }
?>
  </thead>
<tbody>
</table>
<div align="right"><b>ราคาทั้งสิ้นรวม = <u>
<input type="text" value="<?php echo number_format($SumTotal,2);?>"disabled="disabled" readonly="readonly" style="width: 80px;" size="200">
  
</u></b></div>

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