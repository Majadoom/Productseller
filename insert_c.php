<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "insert_c";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> เพิ่มรายชื่อลูกค้า</h1>
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
	<title>Pwo Product</title>

<style>
textarea {resize: none;}
</style>

</head>
<body>
<div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
<form action="c_insert.php" method="post" >
	
	<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >
		
			<tr role="row" class="info">
			<td width="200">บริษัท/หน่วยงาน</td>
			<td>
				<input type="text" name="cus_buss" value="" required class=" form-control is-warning " style="width: 400px;">
			</td>
		</tr>
		<tr>
			<td>ที่อยู่</td>
			<td>
				<textarea id="cus_add" name="cus_add" rows="4" cols="30" class=" form-control is-warning " style="width: 400px;"></textarea>
			</td>
		</tr>
		<tr>
			<td>ชื่อลูกค้า</td>
			<td>
				<input type="text" name="cus_name" value="" required class=" form-control is-warning " style="width: 400px;">
			</td>
		</tr>
			<tr>
			<td>เบอร์โทร</td>
			<td>
				<input type="number" name="cus_tel" value="" required class=" form-control is-warning " style="width: 400px;">
			</td>
		</tr>
		<tr>
			<td>อีเมลล์</td>
			<td>
				<input type="email" name="cus_mail" value="" required class=" form-control is-warning " style="width: 400px;">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="Name_up" value="<?php echo $_SESSION['UserID']." ".$_SESSION['User']; ?>" required class=" form-control is-warning " style="width: 400px;" hidden>
			</td>
		</tr>
	
		

		<tr>
			<td></td>
			<td>
				
				<input type="reset" value="reset" class="btn btn-warning btn-lg">
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
