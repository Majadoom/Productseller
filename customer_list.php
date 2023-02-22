<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "customer_list";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายชื่อลูกค้า</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<a class="btn btn-info btn-xl" onclick="javascript:window.print()">
<i class="fas fa-regular fa-print fa-xl"></i>
</a><br>

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

      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
<!-------->
<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >
  <thead>
  <tr role="row" class="info">
    <td >NO.</td>
    <td >เลขที่ลูกค้า</td>
    <td >บริษัท/หน่วยงาน</td>
    <td >ชื่อลูกค้า</td>
    
    <td >E-mail</td>
    <td >เบอร์โทร</td>
    <td >ที่อยู่</td>
    <td >วันที่อัพเดท</td>
    <td >อัพเดทโดย</td>
  </tr>
</thead>
<tbody>

<?php
$Total = 0;
$SumTotal = 0;
$count_row = 1;
$strSQL2 = "SELECT * FROM customer WHERE cus_id ORDER BY cus_id DESC";
$objQuery2 = mysqli_query($objCon,$strSQL2); 

while($objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))
{

    ?>
    <tr>
      <td><?=$count_row;?></td>
    <td><?=$objResult2["cus_id"];?></td>
    <td><?=$objResult2["cus_buss"];?></td>
    <td><?=$objResult2["cus_name"];?></td>
    <td><?=$objResult2["cus_mail"];?></td>
    <td><?=$objResult2["cus_tel"];?></td>
    <td><?=$objResult2["cus_add"];?></td>
    <td width="10"><?=date("d/m/Y [ H:i:s ]",strtotime("+543year".$objResult2["cus_date"]));?></td>
    <td><?=$objResult2["Name_Up"];?></td>
     
    </tr>
    <?php $count_row++; } ?>

    </tbody>
</table>
<!-------->

<?php
mysqli_close($objCon);
?>
</body>
</html>
  </div>
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