<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php
$menu = "user_page";
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
      
<?php 
             include('config.php');

              $sql = "SELECT * FROM product ORDER BY ProductID
              DESC, ProductName DESC, ProductID  DESC";
                $result = $conn->query($sql);

              $sql1 ="SELECT * FROM customer ";
              $result1 =$conn->query($sql1);
              $row1 = $result1->fetch_array(MYSQLI_ASSOC);

              $cus_name = $row1['cus_name'];
              $cus_buss = $row1['cus_buss'];
              $cus_mail = $row1['cus_mail'];
              $cus_tel  = $row1['cus_tel'];
              $cus_add  = $row1['cus_add'];
          
?>
<a class="btn btn-info btn-xl" onclick="javascript:window.print()">
<i class="fas fa-regular fa-print fa-xl"></i></a>
<br><br>

      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>NO.</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>เลขที่สินค้า</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ชื่อสินค้า</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ปริมาณ</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ราคา</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>วันที่อัพเดท</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>อัพเดทโดย</center></th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                
                $count_row = 1;
                
                      while ($row  = $result->fetch_array(MYSQLI_ASSOC)) {

                    $ProductID         = $row['ProductID'];
                    $ProductName       = $row['ProductName'];
                    $Price             = $row['Price'];
                    $Size              = $row['Size'];
                    $ProDate           = $row['ProDate'];
                    $Name_Up           = $row['Name_Up'];
                    ?>
                <tr>
                    <td width="10"><center><?php echo $count_row;?></center></td>
                    <td width="10" ><center><?php echo $ProductID;?></center></td>
                    <td><?php echo $ProductName;?></td>
                    <td width="10"><center><?php echo $Size;?></center></td>
                     <td><center><?php echo number_format($Price,2);?></center></td>
                     <td width="10"><center><?php echo date("d/m/Y [ H:i:s ]",strtotime("+543year".$ProDate));?></center></td>
                     <td><center><?php echo $Name_Up;?></center></td>

                 
                </tr>
                    
               <?php $count_row++; } ?>
                                
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
