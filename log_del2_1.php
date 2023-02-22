<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "log_del2_1";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> LOG-ลบลูกค้า</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('config.php');
              $sql = "SELECT * FROM log_del2_1 ORDER BY id
              ASC, log_time DESC, log_time ASC";
                $result = $conn->query($sql);?>
                

        <a class="btn btn-info btn-xl" onclick="javascript:window.print()">
<i class="fas fa-regular fa-print fa-xl"></i></a>
<br><br>

      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" border="1">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;"><center>id </center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;"><center>key_id</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;"><center>action_name</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>old_orderid</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>old_productid</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>old_qty</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>old_price</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>log_time</center></th>
             
                 
                   
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                   
                    $id              = $row['id'];
                    $key_id          = $row['key_id'];
                    $action_name     = $row['action_name'];
                    $old_orderid     = $row['old_orderid'];
                    $old_productid   = $row['old_productid'];
                    $old_qty         = $row['old_qty'];
                    $old_price       = $row['old_price'];
                
                    $log_time        = $row['log_time'];
                  
                 

                    
                    
                    ?>
                <tr>
                  
                    <td><center><?php echo $id;?></center></td>
                    <td><center><?php echo $key_id;?></center></td>
                    <td><center><?php echo $action_name;?></center></td>
                    <td><center><?php echo $old_orderid;?></center></td>
                    <td><center><?php echo $old_productid;?></center></td>
                    <td><center><?php echo $old_qty;?></center></td>
                    <td><center><?php echo $old_price;?></center></td>
                
                    <td><center><?php echo $log_time;?></center></td>
                  
                 
                        
                     

                     
                </tr>
                    
               <?php } ?>
                                    
              </tbody>
                 
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