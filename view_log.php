<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "view_log";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> LOG</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" border="1">

       <tr>
          <td>
            <a href="log3.php">Logarithm - Login/Logout</a>
          </td>
        </tr>

        <tr>
          <td>
            <a href="log.php">Logarithm - แก้ไข-ลูกค้า</a>
          </td>
        </tr>   

         <tr>
          <td>
            <a href="log1.php">Logarithm - แก้ไข-สินค้า</a>
          </td>
        </tr>

         <tr>
          <td>
            <a href="log2.php">Logarithm - แก้ไข-ผู้ใช้งาน</a>
          </td>
        </tr>

         <tr>
          <td>
            <a href="log_del.php">Logarithm - ลบ-สินค้า</a>
          </td>
        </tr>

         <tr>
          <td>
            <a href="log_del1.php">Logarithm - ลบ-ลูกค้า</a>
          </td>
        </tr>

         <tr>
          <td>
            <a href="log_del2.php">Logarithm - ลบ-สั่งซื้อ</a>
          </td>
        </tr>

         <tr>
          <td>
            <a href="log_del2_1.php">Logarithm - ลบ-รายละเอียดสั่งซื้อ</a>
          </td>
        </tr>       




    </table>  
             
            
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