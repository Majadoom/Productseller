<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "product";

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
    <div class="card-header card-navy card-outline" align="center">

      <a href="clear.php?" class="btn btn-warning btn-xl">ลบทั้งรายการ<i class="fas fa-eraser fa-2x"></i></a>
 &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="show.php" class="btn btn-primary btn-xl">ตะกร้าสินค้า<i class="fas fa-cart-plus fa-2x"></i></a>  

      </div>
<html>
<head>
<title>PWO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "localhost";
$userName = "root";
$userPassword = "1234";
$dbName = "mydatabase";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
    echo $objCon->connect_error;
    exit();
}

$strSQL = "SELECT * FROM product";
$objQuery = mysqli_query($objCon,$strSQL);
if(!$objQuery)
{
  echo $objCon->error;
  exit();
}
?>
<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" width="500">
   <tr role="row" class="info">
  


    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>เลขที่สินค้า</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;"><center>ชื่อสินค้า</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ขนาด/ปริมาณ</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ราคา</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>-</center></th>

  </tr>
  <?php
  while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
  {
  ?>
  <tr>

    <td><?php echo $objResult["ProductID"];?></td>
    <td><?php echo $objResult["ProductName"];?></td>
    <td><?php echo $objResult["Size"];?></td>
    <td><?php echo $objResult["Price"];?></td>
    <td><a href="order.php?ProductID=<?php echo $objResult["ProductID"];?>">+เพิ่ม</a></td>
  </tr>
  <?php
  }
  ?>
</table>

<?php
mysqli_close($objCon);
?>
</body>
</html>
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