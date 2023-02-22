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
    </i> จัดการข้อมูลผู้ใช้</h1>
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
$IDu = (isset($_GET['IDu'])) ? $_GET['IDu'] : "";
$sql = "SELECT * FROM user WHERE IDu = '{$_SESSION["UserID"]}'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$Username  = $row['Username'];
$Password  = $row['Password'];
$Firstname = $row['Firstname'];
$Lastname  = $row['Lastname'];
$Idpass    = $row['Idpass'];
$Office    = $row['Office'];
$Partwork  = $row['Partwork'];
$Work      = $row['Work'];
$Regidate  = $row['Regidate'];
$Phone     = $row['Phone'];
$Email     = $row['Email'];
$Userlevel = $row['Userlevel'];




?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">

<table width="500" align="center">
        <h1 align="center">แบบฟอร์มแก้ไขผู้ใช้</h1>
        <form action="user_update_edits.php" method="POST">
<tr>
            <td><font color="red" class="form-control btn-defult">เลขที่ผู้ใช้ : </font></td>
            <td><input type="text" name="IDu" value="<?php echo  $_SESSION["UserID"]=$IDu; ?>"  hidden/>
                 <input type="text" name="IDu" value="<?php echo $IDu; ?>" readonly="readonly" class="form-control btn-defult">
            </td>
</tr>
<tr>
            <td><font class="form-control btn-defult">Username : </font></td>
            <td>
              <input type="text" name="Username" value="<?php echo $_SESSION["Username"]=$Username; ?>"  class="form-control is-warning"/>
              <input type="text" value="<?php echo $Username; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">Password : </font></td>
            <td>
              <input type="text" name="Password" value="<?php echo $_SESSION["Password"]=$Password; ?>"  class="form-control is-warning"/>
              <input type="text" value="<?php echo $Password; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">ชื่อ : </font></td>
            <td>
              <input type="text" name="Firstname" value="<?php echo $_SESSION["Firstname"]=$Firstname; ?>"  class="form-control is-warning"/>
              <input type="text" value="<?php echo $Firstname; ?>"  hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">นามสกุล : </font></td>
            <td>
              <input type="text" name="Lastname" value="<?php echo $_SESSION["Lastname"]=$Lastname; ?>"  class="form-control is-warning"/>
              <input type="text" value="<?php echo $Lastname; ?>"  hidden/></td>
</tr>


<tr>
            <td><font class="form-control btn-defult">รหัสพนักงาน : </font></td>
            <td>
               <input type="text" name="Idpass" value="<?php echo $_SESSION["Idpass"]=$Idpass; ?>"  class="form-control is-warning"/>
              <input type="text" value="<?php echo $Idpass; ?>"  hidden/></td>
</tr>

<tr>
            <td><font class="form-control btn-defult">สำนัก : </font></td>
            <td>
               <input type="text" name="Office" value="<?php echo $Officename[$_SESSION["Office"]]; ?>" readonly="readonly" class="form-control is-warning"/>
              <input type="text" value="<?php echo $Office; ?>"  hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">ส่วนงาน : </font></td>
            <td>
               <input type="text" name="Partwork" value="<?php echo $Partworkname[$_SESSION["Partwork"]]; ?>" readonly="readonly" class="form-control is-warning"/>
              <input type="text" value="<?php echo $Partwork; ?>"  hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">งาน : </font></td>
            <td>
               <input type="text" name="Work" value="<?php echo $Workname[$_SESSION["Work"]]; ?>" readonly="readonly"  class="form-control is-warning"/>
              <input type="text" value="<?php echo $Work; ?>"  hidden/></td>
</tr>

<tr>
            <td><font class="form-control btn-defult">เบอร์โทร : </font></td>
            <td>
               <input type="text" name="Phone" value="<?php echo $_SESSION["Phone"]=$Phone; ?>"  class="form-control is-warning"/>
              <input type="text" value="<?php echo $Phone; ?>"  hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">อีเมล์ : </font></td>
            <td>
              <input type="text" name="Email" value="<?php echo $_SESSION["Email"]=$Email; ?>"  class="form-control is-warning"/>
              <input type="text" value="<?php echo $Email; ?>"  hidden/></td>
</tr>

<tr>
            <td><font color="red" class="form-control btn-defult">สถานะ : </font></td>
            <td>
            <font color="red"><input type="text" name="Userlevel" value="<?php echo $Userlevelname[$Userlevel]; ?>"  readonly disabled class="form-control btn-defult"/></font>

            <input type="text" name="Userlevel" value="<?php echo $_SESSION[$Userlevel]=$Userlevel; ?>" hidden >
          </td>
</tr>
<tr>
            <td><font class="form-control btn-defult">เริ่มใช้งานวันที่ : </font></td>
            <td>
              <input type="text" name="Regidate" value="<?php echo $_SESSION["Regidate"]=date("d/m/Y",strtotime($Regidate."+543year")); ?>"  class="form-control btn-defult" readonly="readonly" disabled="disabled"/>
              <input type="text" value="<?php echo $Regidate; ?>"  hidden/></td>
</tr>
<input type="text" name="Name_Up" value="<?php echo $_SESSION['Idpass']." ".$_SESSION['User'];?>" hidden>




 
   <div align="center">
                                             
                   <a class="btn btn-warning btn-xs" href="user_page.php" >
                      <i class="fa fa-chevron-circle-left">
                      </i> หน้าหลัก
                    </a>
                   <button a class="btn btn-info btn-xs" type="submit" >
                      <i class="fas fa-pencil-alt">
                      </i> บันทึก </button>
                   
                    </a>    
       </div> 
 <br>

   

        </form>
        </table>
        <script>
           document.getElementById('ID').value       = '<?php echo $_SESSION["UserID"]; ?>';
           document.getElementById('Position').value = '<?php echo $_SESSION["Position"]; ?>';
           document.getElementById('Office').value   = '<?php echo $_SESSION["Office"]; ?>';
           document.getElementById('Partwork').value = '<?php echo $_SESSION["Partwork"]; ?>';
           document.getElementById('Work').value     = '<?php echo $_SESSION["Work"]; ?>';
        </script>

    </body>
</html>
   
                </tr>
                    
              
                                 
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