<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "add_product";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> แก้ไขข้อมูลสินค้า</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">


    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('config.php');
              $sql = "SELECT * FROM product ORDER BY ProductID";
                $result = $conn->query($sql);?>
                
<a class="btn btn-info btn-xl" onclick="javascript:window.print()">
<i class="fas fa-regular fa-print fa-xl"></i>
</a>       
       <br><br>

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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ขนาด/ปริมาณ</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ราคา</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>วันที่อัพเดท</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>อัพเดทโดย</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"></th>
                  
                  
                   
                </tr>
              </thead>
              <tbody>
                <?php
                    $count_row = 1;
                  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $ProductID   = $row['ProductID'];
                    $ProductName = $row['ProductName'];
                    $Size        = $row['Size'];
                    $Price       = $row['Price'];
                    $ProDate           = $row['ProDate'];
                    $Name_Up           = $row['Name_Up'];
                    
                    ?>
                <tr>
                    <td><center><?php echo $count_row;?></center></td>
                    <td><center><?php echo $ProductID;?></center></td>
                    <td><?php echo $ProductName;?></td>
                    <td><center><?php echo $Size;?></center></td>
                    <td><center><?php echo $Price;?></center></td>
                    <td><center><?php echo date("d/m/Y [ H:i:s ]",strtotime("+543year".$ProDate));?></center></td>
                     <td><center><?php echo $Name_Up;?></center></td>
                <td>
                  <center>
                    <a href="edit_p.php?ProductID=<?php echo $ProductID;?>">
                    แก้ไข</a> 

                  </center>
                </td>     
                    <td>
                      <center>
                      <a href="del_p.php?ProductID=<?php echo $ProductID;?>">
                    ลบ</a>  
                      </center>  
                    </td>
    </tr>
     <?php $count_row++; } ?>
   </tbody>
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