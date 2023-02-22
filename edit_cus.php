<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "customer_list";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายชื่อลูกค้า</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<!DOCTYPE html>
<?php include('config.php');
$cus_id  = (isset($_GET['cus_id'])) ? $_GET['cus_id'] : "";
$sql = "SELECT * FROM customer WHERE cus_id  = '$cus_id'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$cus_id      = $row['cus_id'];
$cus_name    = $row['cus_name'];
$cus_buss    = $row['cus_buss'];
$cus_mail    = $row['cus_mail'];

$cus_tel     = $row['cus_tel'];
$cus_add     = $row['cus_add'];
$cus_date    = $row['cus_date'];




?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
<style>
textarea {resize: none;}
</style>
    </head>
    <body >
<br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">

<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >


        <form action="update_cus.php" method="POST">
<tr role="row" class="info">
            <td><font color="red" class="form-control btn-defult">cus_id : </font></td>
            <td><input type="text" name="cus_id" value="<?php echo  $cus_id; ?>"  hidden/>
                 <input type="text" name="cus_id" value="<?php echo $cus_id; ?>" readonly disabled class="form-control btn-defult" style="width: 400px;">
            </td>
</tr>
<tr>
            <td width="200"><font class="form-control btn-defult">cus_name : </font></td>
            <td>
              <input type="text" name="cus_name" value="<?php echo $cus_name; ?>"  class="form-control is-warning" style="width: 400px;"/>
              <input type="text" value="<?php echo $cus_name; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">cus_buss : </font></td>
            <td>
              <input type="text" name="cus_buss" value="<?php echo $cus_buss; ?>"  class="form-control is-warning" style="width: 400px;"/>
              <input type="text"  value="<?php echo $cus_buss; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">cus_mail : </font></td>
            <td>
              <input type="text" name="cus_mail" value="<?php echo $cus_mail; ?>"  class="form-control is-warning" style="width: 400px;"/>
              <input type="text"  value="<?php echo $cus_mail; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">cus_tel : </font></td>
            <td>
              <input type="text" name="cus_tel" value="<?php echo $cus_tel; ?>"  class="form-control is-warning" style="width: 400px;"/>
              <input type="text"  value="<?php echo $cus_tel; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">cus_add : </font></td>
            <td>
            <textarea id="cus_add" name="cus_add" rows="4" cols="50" style="width: 400px;" class="form-control is-warning"><?php echo $cus_add; ?></textarea>
              <input type="text"  value="<?php echo $cus_add; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">cus_date : </font></td>
            <td>
              <input type="text" name="cus_date" value="<?php echo date("d/m/Y H:i:s",strtotime("+543year".$cus_date)); ?>" style="width: 400px;" class="form-control is-warning" readonly="readonly" disabled="disabled">
              </td>
</tr>

    <input type="text" name="Name_up" value="<?php echo $_SESSION['Idpass']." ".$_SESSION['User'] ?>" style="width: 400px;" class="form-control is-warning" hidden>

<tr><td></td>
    <td>
                  <button a class="btn btn-info btn-xs" type="submit" >
                      <i class="fas fa-pencil-alt">
                      </i> บันทึก </button></td>
</tr>

   <div align="center">
                                             
                   <a class="btn btn-warning btn-xs" href="customer_list.php" >
                      <i class="fa fa-chevron-circle-left">
                      </i> Customer List
                    </a>
                   
                   
                    </a>    
       </div> 
 <br>

   

        </form>
        </table>
    

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
         