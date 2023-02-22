<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "report_SE";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> ยอดขายตามช่วงเวลา</h1>
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
  <title>ยอดขายตามช่วงเวลา</title>
</head>
<body>
<div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
<form action="report_view_SE.php" method="POST" accept-charset="utf-8">


  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >

<tr>
    <td width="30">Report S-E</td>
<td width="30">
<input type="text" name="S_date" value="" pattern="[0-9]{1,}" title="กรอกตัวเลข วันที่ 1ตัวอักษรขึ้นไป " placeholder="วันที่"  style="width: 90px;" required class="form-control is-warning">
</td>
<td width="30">
<select name="S_month" id="S_month" style="width: 110px;" class="form-control is-warning" required>
    <option value="">เดือน..</option>
     <option value="01">มกราคม</option>
     <option value="02">กุมภาพันธ์</option>
     <option value="03">มีนาคม</option>
     <option value="04">เมษายน</option> 
     <option value="05">พฤษภาคม</option>
     <option value="06">มิถุนายน</option> 
     <option value="07">กรกฎาคม</option>
     <option value="08">สิงหาคม</option> 
     <option value="09">กันยายน</option>
     <option value="10">ตุลาคม</option> 
     <option value="11">พฤศจิกายน</option>
     <option value="12">ธันวาคม</option>      
</select>
</td>
<td width="30">
<input type="text" name="S_year" value="" pattern="[0-9]{4,}" title="กรอกตัวเลข ปี พ.ศ. 4ตัวอักษรขึ้นไป " placeholder="พ.ศ."  style="width: 90px;" required class="form-control is-warning">
</td>
</tr>
<tr><td></td><td></td>
<td width="30">ถึง</td>
<td></td>
</tr>
<tr>
    <td></td>
<td width="30">
<input type="text" name="E_date" value="" pattern="[0-9]{1,}" title="กรอกตัวเลข วันที่ 1ตัวอักษรขึ้นไป " placeholder="วันที่"  style="width: 90px;" required class="form-control is-warning">
</td>
<td width="30">
<select name="E_month" id="E_month" style="width: 110px;" class="form-control is-warning" required>
    <option value="">เดือน..</option>
     <option value="01">มกราคม</option>
     <option value="02">กุมภาพันธ์</option>
     <option value="03">มีนาคม</option>
     <option value="04">เมษายน</option> 
     <option value="05">พฤษภาคม</option>
     <option value="06">มิถุนายน</option> 
     <option value="07">กรกฎาคม</option>
     <option value="08">สิงหาคม</option> 
     <option value="09">กันยายน</option>
     <option value="10">ตุลาคม</option> 
     <option value="11">พฤศจิกายน</option>
     <option value="12">ธันวาคม</option>      
</select>
</td>
<td width="30">
<input type="text" name="E_year" value="" pattern="[0-9]{4,}" title="กรอกตัวเลข ปี พ.ศ. 4ตัวอักษรขึ้นไป " placeholder="พ.ศ."  style="width: 90px;" required class="form-control is-warning">
</td>
</tr>

<tr><td></td><td></td>
      <td>
            <input type="reset" value="RESET" class="btn btn-warning btn-lg">
            <input type="submit" value="SUBMIT" class="btn btn-success btn-lg">
      </td>
      <td></td>
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