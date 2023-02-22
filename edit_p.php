<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "edit_p";

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

<!DOCTYPE html>
<?php include('config.php');
$ProductID  = (isset($_GET['ProductID'])) ? $_GET['ProductID'] : "";
$sql = "SELECT * FROM product WHERE ProductID  = '$ProductID'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$ProductID   = $row['ProductID'];
$ProductName = $row['ProductName'];
$Size        = $row['Size'];
$Price       = $row['Price'];




?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>PWO Product Seller</title>
    </head>
    <body>
<div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
        <div class="col-md-12">

<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >

        <form action="update_p.php" method="POST">

<tr role="row" class="info">

            <td width="200"><font color="red" class="form-control btn-defult">ProductID : </font></td>
            <td><input type="text" name="ProductID" value="<?php echo  $ProductID; ?>"  hidden/>
                 <input type="text" name="ProductID" value="<?php echo $ProductID; ?>" readonly disabled class="form-control btn-defult" style="width: 400px;">
            </td>
</tr>
<tr>
            <td><font class="form-control btn-defult">ProductName : </font></td>
            <td>
              <input type="text" name="ProductName" value="<?php echo $ProductName; ?>"  class="form-control is-warning" style="width: 400px;"/>
              <input type="text" value="<?php echo $ProductName; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">Size : </font></td>
            <td>
              <input type="text" name="Size" value="<?php echo $Size; ?>"  class="form-control is-warning" style="width: 400px;"/>
              <input type="text"  value="<?php echo $Size; ?>"   hidden/></td>
</tr>
<tr>
            <td><font class="form-control btn-defult">Price : </font></td>
            <td>
              <input type="text" name="Price" value="<?php echo $Price; ?>"  class="form-control is-warning" style="width: 400px;"/>
              <input type="text"  value="<?php echo $Price; ?>"   hidden/></td>
</tr>
<input type="text" name="Name_Up" value="<?php echo $_SESSION['Idpass']." ".$_SESSION['User']; ?>" hidden>
<tr><td></td>
    <td><button a class="btn btn-info btn-xs" type="submit" >
                      <i class="fas fa-pencil-alt">
                      </i> บันทึก </button></td>
</tr>



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