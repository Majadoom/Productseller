<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "user_list";

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
      
  <?php include('config.php');
              $sql = "SELECT * FROM user ORDER BY Office DESC";
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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ID ผู้ใช้</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>Username</center></th>
                   <th  tabindex="0" rowspan="1" colspan="1" style="width:1%;"><center>Password</center></th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ชื่อ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">สกุล</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">รหัสพนักงาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">สำนัก</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ส่วนงาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">งาน</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">เบอร์โทร</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">อีเมลล์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ผู้ใช้ระดับ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">วันที่เริ่มใช้งาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">Admin</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">Online</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">Date Online</th>
                   
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                   
                    $IDu       = $row['IDu'];
                    $Username  = $row['Username'];
                    $Password  = $row['Password'];
                    $Firstname = $row['Firstname'];
                    $Lastname  = $row['Lastname'];
                    $Idpass    = $row['Idpass'];
                    $Office    = $row['Office'];
                    $Partwork  = $row['Partwork'];
                    $Work      = $row['Work'];
                    $Phone     = $row['Phone'];
                    $Email     = $row['Email'];
                    $Regidate  = $row['Regidate'];
                    $Userlevel = $row['Userlevel'];

                    $Name_Up   = $row['Name_Up'];
                    $Status    = $row['Status'];
                    $Date_sta  = $row['Date_sta'];

                    
                    
                    ?>
                <tr>
                  
                    <td><center><?php echo $IDu;?></center></td>
                    <td><center><?php echo $Username;?></center></td>
                    <td><center><?php echo "xxxxx";?></center></td>
                    <td><center><?php echo $Firstname;?></center></td>
                    <td><center><?php echo $Lastname;?></center></td>
                    <td><center><?php echo $Idpass;?></center></td>
                    <td><center><?php echo $Officename[$Office];?></center></td>
                    <td><center><?php echo $Partworkname[$Partwork];?></center></td>
                    <td><center><?php echo $Workname[$Work];?></center></td>
                    <td><center><?php echo $Phone;?></center></td>
                    <td><center><?php echo $Email;?></center></td>
                    <td><center><?php echo $Userlevelname[$Userlevel];?></center></td>
                    <td><center><?php echo date("d/m/Y [H:i:s]",strtotime("+543year". $Regidate));?></center></td>
                     <td><center><?php echo $Name_Up;?></center></td>
<?php if ($Status > '0') { ?>
 <td><center><i class="fas fa-circle fa-xl" style="color: #25E22B;"></i></center></td>
<?php } ?>

<?php if ($Status  < '1' ) { ?>
 <td><center><i class="fas fa-circle fa-xl" style="color: #787878;"></i></center></td>
<?php } ?>

                      <!--td><center><?php echo $Status;?></center></td-->

                       <td width="10"><center><?php if($Date_sta>1){ echo date("d/m/Y [H:i:s]",strtotime("+543year". $Date_sta));}else{ echo "00/00/0000 [00:00:00]";}?></center></td>
                        
                     

                     
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