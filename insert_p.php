<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "insert_p";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> เพิ่มข้อมูลสินค้า</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<!DOCTYPE html>
<?php 

include('config.php');

 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PWO Product</title>
</head>
<body>

	<div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
        <div class="col-md-12">
  <form action="p_insert.php" method="post" accept-charset="utf-8">
	
	<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >
		
			<tr role="row" class="info">
			<td width="200">ชื่อสินค้า</td>
			<td>
<input type="text" name="ProductName" value="" required class="form-control is-warning" style="width: 400px;">
			</td>
		</tr>
			<tr>
			<td>ขนาด/ปริมาณ</td>
			<td>
<input type="text" name="Size" value="" required class="form-control is-warning" style="width: 400px;">
			</td>
		</tr>
		<tr>
			<td>ราคา</td>
			<td>
<input type="text" name="Price" value="" required class="form-control is-warning" style="width: 400px;">
			</td>
		</tr>
		<input type="text" name="Name_Up" value="<?php echo $_SESSION['Idpass']." ".$_SESSION['User']; ?>" hidden>
		<tr>
			<td></td>
			<td>
			
				<input type="reset" value="reset"    class="btn btn-warning btn-lg">
				<input type="submit" value="confirm" class="btn btn-success btn-lg">
			
			</td>
		</tr>
	</table>




</form>
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
