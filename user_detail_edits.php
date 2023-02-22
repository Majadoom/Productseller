<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

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
    </i> จัดการข้อมูลผู้ใช้งาน</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      

    
       
      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">



<!DOCTYPE html>
<?php include('config.php');

$ID = (isset($_GET['ID'])) ? $_GET['ID'] : "";
$sql = "SELECT * FROM user WHERE IDu = '{$_SESSION["UserID"]};'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$IDu        = $row['IDu'];
$Username   = $row['Username'];
$Password   = $row['Password'];
$Firstname  = $row['Firstname'];
$Lastname   = $row['Lastname'];
$Idpass     = $row['Idpass'];

$Office     = $row['Office'];
$Partwork   = $row['Partwork'];
$Work       = $row['Work'];

$Regidate   = $row['Regidate'];
$Phone      = $row['Phone'];
$Email      = $row['Email'];

$Userlevel  = $row['Userlevel'];

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
<table width="500" align="center">
        <h1 align="center">ข้อมูลผู้ใช้งานระบบ</h1>
    <tr>
        <td><font color="red" class="form-control btn-defult">ID </font></td>
        <td><font color="red" class="form-control btn-defult"><?php echo $IDu; ?></font></td>
</tr>
    <tr>
        <td><font color="blue" class="form-control btn-defult">Username </font></td>
        <td><font color="blue" class="form-control btn-defult"><?php echo $Username; ?></font> </td>
</tr>
    <tr>
        <td><font color="blue" class="form-control btn-defult">Password </font></td>
        <td><font color="blue" class="form-control btn-defult"><?php echo "xxxxx"; ?></font> </td>
</tr>
 <tr>
        <td><font color="green" class="form-control btn-defult">ชื่อ </font></td>
        <td><font color="green" class="form-control btn-defult"><?php echo $Firstname; ?></font> </td>
</tr>
    <tr>
        <td><font color="green" class="form-control btn-defult">นามสกุล </font></td>
        <td><font color="green" class="form-control btn-defult"><?php echo $Lastname; ?></font> </td>
</tr>

    <tr>
        <td width="130"><font color="green" class="form-control btn-defult">รหัสพนักงาน </font></td>
        <td><font color="green" class="form-control btn-defult"><?php echo $Idpass; ?></font> </td>
</tr>
    <tr>
        <td width="130"><font color="green" class="form-control btn-defult">สำนัก </font></td>
        <td><font color="green" class="form-control btn-defult"><?php echo $Officename[$Office]; ?></font> </td>
</tr>
    <tr>
        <td width="130"><font color="green" class="form-control btn-defult">ส่วนงาน </font></td>
        <td><font color="green" class="form-control btn-defult"><?php echo $Partworkname[$Partwork]; ?></font> </td>
</tr>
    <tr>
        <td width="130"><font color="green" class="form-control btn-defult">งาน </font></td>
        <td><font color="green" class="form-control btn-defult"><?php echo $Workname[$Work]; ?></font> </td>
</tr>

    <tr>
        <td><font color="green" class="form-control btn-defult">เบอร์โทร </font></td>
        <td><font color="green" class="form-control btn-defult"><?php echo $Phone; ?></font> </td>
</tr>
    <tr>
        <td><font color="green" class="form-control btn-defult">อีเมล์ </font></td>
        <td><font color="green" class="form-control btn-defult"><?php echo $Email; ?></font> </td>
</tr>
<tr>
        <td><font color="red" class="form-control btn-defult">สถานะ </font></td>
        <td><font color="red" class="form-control btn-defult"><?php echo $Userlevelname[$Userlevel]; ?></font> </td>
    </tr>
    <tr>
        <td><font color="red" class="form-control btn-defult">เริ่มใช้งานวันที่ </font></td>
        <td><font color="red" class="form-control btn-defult"><?php echo date("d/m/Y",strtotime("+543year". $Regidate)); ?></font> </td>
    </tr>
    <tr><td></td>
        <td>
             <b><label style="color:#B22222;text-align:center;" >***หลังจากแก้ไขข้อมูลผู้ใช้งานแล้ว ให้ทำการ Logout และ Login ใหม่อีกครั้งเพื่อ ล้างหรือเคลียร์ข้อมูลเก่า***</label></b>
        </td>
    </tr>
   


        <div align="center">
   

                    <a class="btn btn-warning btn-xs" href="user_page.php" >
                      <i class="fa fa-chevron-circle-left"> หน้าหลัก 
                      </i> 
                    </a>
                    <a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
                      <i class="fa fa-print"> พิมพ์รายการ
                      </i>
                   
                    </a>                         
                   <a class="btn btn-warning btn-xs" href="user_edits.php?IDu=<?php echo $IDu; ?>" >
                      <i class="fas fa-pencil-alt"> แก้ไขรายการ
                      </i>
                    </a>
                  </div> <br>
                 
  
  </form>
    </table>
    </body>
</html>
                      
               
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
