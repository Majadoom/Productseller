<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "order_list";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการสั่งซื้อสินค้า</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      <a class="btn btn-info btn-xl" onclick="javascript:window.print()">
<i class="fas fa-regular fa-print fa-xl"></i>
</a>
</div>


<?php
error_reporting(0);
$serverName = "localhost";
$userName = "root";
$userPassword = "1234";
$dbName = "mydatabase";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
  echo $objCon->connect_error;
  exit(); } 

  ?>


<!-------->

<div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-12">
<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" >
 <thead>

   <tr role="row" class="info">
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>NO.</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>เลขที่สั่งซื้อ</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;"><center>วันที่สั่งซื้อ</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>เลขที่ลูกค้า</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;"><center>ชื่อลูกค้า</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;"><center>บริษัท/หน่วยงาน</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>สำนัก</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ส่วนงาน</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>งาน</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ผู้ขาย</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>ผู้บันทึก</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>-</center></th>
    <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;"><center>-</center></th>

  </tr>
</thead>
<tbody>



<?php

include"config.php"; 

if ($_SESSION['Userlevel'] == "2" || "3" || "5" || "6" ) {
$strSQL2 = "SELECT * FROM orders  WHERE Office = '{$_SESSION['Office']}' AND Partwork = '{$_SESSION['Partwork']}' AND Work = '{$_SESSION['Work']}'";
$objQuery2 = mysqli_query($objCon,$strSQL2);
 } 
if ($_SESSION['Userlevel'] == "1") {
$strSQL2 = "SELECT * FROM orders  ";
$objQuery2 = mysqli_query($objCon,$strSQL2);
 }

$count_row = 1;
while($objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))
{

    ?>

    <tr>
    <td><?=$count_row;?></td>
    <td><?=$objResult2["OrderID"];?></td>
    <td><?=date("d/m/Y [ H:i:s ]",strtotime("+543year".$objResult2["OrderDate"]));?></td>
    <td><?=$objResult2["OrderCusID"];?></td>

    <?php if ($objResult2["OrderCusID"]) {

      $strSQL = "SELECT * FROM customer WHERE cus_id = '".$objResult2["OrderCusID"]."' ";
      $objQuery = mysqli_query($objCon,$strSQL);
      $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC); ?>

      <td><?=$objResult["cus_name"];?></td>  
      <td><?=$objResult["cus_buss"];?></td>

      <td><?=$Officename[$objResult2["Office"]];?></td>
      <td><?=$Partworkname[$objResult2["Partwork"]];?></td>
      <td><?=$Workname[$objResult2["Work"]];?></td>

      <td><?=$objResult2["UserSell"];?></td>
      <td><?=$objResult2["UserSave"];?></td>

   <?php $count_row++; } ?>
   <td>
    <a href="view_order.php?OrderID=<?php echo $objResult2["OrderID"];?>"><center><i class="fas fa-solid fa-eye fa-2x" style="color:#1c7ed6;"></i></center>
    </td>
     <td>
    <a href="del_o.php?OrderID=<?php echo $objResult2["OrderID"];?>"><center>
   <i class="fas fa-solid fa-trash fa-2x" style="color:#B22222;"></i>
    </center>
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<!-------->
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
<?php
mysqli_close($objCon);
?>
<?php } ?>
