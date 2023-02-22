<?php 
@session_start();
if ($_SESSION['Userlevel'] != '1') {
  
  Header("Location: ../form_login.php");


}else{?>

<?php

$menu = "adm_edit_user";

?>

<?php include('u_header.php'); ?>


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลสมาชิก</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

  <?php include('config.php');
  error_reporting (E_ALL ^ E_NOTICE);
   $sqli = "SELECT * FROM user ORDER BY Regidate DESC";
   $result = $conn->query($sqli);?>
        
      

      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-12">
        <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">ID</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">เริมใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">Username</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">Password</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ชื่อ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">นามสกุล</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">รหัสพนักงาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">สำนัก</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">ส่วนงาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">งาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">เบอร์โทร</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">อีเมลล์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">สถานะ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">-</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">-</th>
                </tr>
              </thead>
              <tbody>
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
                    

                    
                    ?>
                <tr>
                   <td><center><?php echo $IDu;?></center></td>
                        <td><?php echo date("d/m/Y", strtotime("+543year". $Regidate)); ?></td>
                        <td><?php echo $Username;?></td>
                        <td><?php echo "xxxxx";?></td>
                        <td><?php echo $Firstname;?></td>
                        <td><?php echo $Lastname;?></td>
                        <td><?php echo $Idpass;?></td>
                        <td><?php echo $Officename[$Office];?></td>
                        <td><?php echo $Partworkname[$Partwork];?></td>
                        <td><?php echo $Workname[$Work];?></td>
                        <td><?php echo $Phone;?></td>
                        <td><?php echo $Email;?></td>

                        <?php if ($Userlevel == '1') { ?>
                           <td>
                         <center> 
                          <button type="button" class="btn btn-dark">
                          <?php echo $Userlevelname[$Userlevel];?>
                        </button>
                      </center>
                        </td>
                      <?php  } ?>

                          <?php if ($Userlevel == '2') { ?>
                           <td>
                         <center> 
                          <button type="button" class="btn btn-info">
                          <?php echo $Userlevelname[$Userlevel];?>
                        </button>
                      </center>
                        </td>
                      <?php  } ?>

                          <?php if ($Userlevel == '3') { ?>
                           <td>
                         <center> 
                          <button type="button" class="btn btn-primary">
                          <?php echo $Userlevelname[$Userlevel];?>
                        </button>
                      </center>
                        </td>
                      <?php  } ?>

                          <?php if ($Userlevel == '4') { ?>
                           <td>
                         <center> 
                          <button type="button" class="btn btn-danger">
                          <?php echo $Userlevelname[$Userlevel];?>
                        </button>
                      </center>
                        </td>
                      <?php  } ?>

                          <?php if ($Userlevel == '5') { ?>
                           <td>
                         <center> 
                          <button type="button" class="btn btn-warning">
                          <?php echo $Userlevelname[$Userlevel];?>
                        </button>
                      </center>
                        </td>
                      <?php  } ?>

                          <?php if ($Userlevel == '6') { ?>
                           <td>
                         <center> 
                          <button type="button" class="btn btn-success">
                          <?php echo $Userlevelname[$Userlevel];?>
                        </button>
                      </center>
                        </td>
                      <?php  } ?>

                    

                     


                  <td>                         
                   <center><a class="btn btn-warning btn-xs" href="a_e_user.php?IDu=<?php echo $IDu; ?>" >
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a></center>
                  </td>    
                  <td>
                     <center><a class="btn btn-danger btn-xs" href="del_u.php?IDu=<?php echo $IDu; ?>" >
                      <i class="fas fa-trash-alt">
                      </i> 
                    </a></center>
                  </td> 
                </tr>
                    
            
            <?php }?>
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
<?php }?>
