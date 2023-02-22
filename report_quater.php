<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "report_quater";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> ยอดขายรายไตรมาส</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ยอดขายรายไตรมาศ</title>
</head>
<body>
<div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
<form action="report_view_q.php" method="POST" accept-charset="utf-8">
    
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >

<tr role="row" class="info">

  <tr><td>Report Quater</td></tr>
<tr>

    <td width="100"> ปี พ.ศ. </td>
    <td>
<input type="text=" name="OrderYear" value="" pattern="[0-9]{4,}" title="กรอกตัวเลข ปี พ.ศ. 4ตัวอักษรขึ้นไป " class="form-control is-warning" style="width: 200px;" required>
    </td>
</tr>
<tr>
    <td> ไตรมาส </td>
<td>
<select name="OrderDate" id="OrderDate" class="form-control is-warning" style="width: 200px;" required>
    <option value="">...</option>
    <option value="q1">ไตรมาส 1</option>
    <option value="q2">ไตรมาส 2</option>
    <option value="q3">ไตรมาส 3</option>
    <option value="q4">ไตรมาส 4</option>
</select>
</td>
</tr>
    <tr>
        <td></td>
    	<td>
<input type="reset" value="RESET" class="btn btn-warning btn-lg">
<input type="submit" value="SUBMIT" class="btn btn-success btn-lg">
    	</td>
    </tr>
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