
<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "report_month";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายงานยอดขายรายไตรมาศ</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

 <div >
<a class="btn btn-info btn-xl" onclick="javascript:window.print()">
<i class="fas fa-regular fa-print fa-xl"></i>
</a> 
</div> 

<?php include('config.php'); ?> 
<div align="center">
  <h4><label> <?php echo $Officename[$_SESSION['Office']];?> </label></h4>
<h4><label> <?php echo $Partworkname[$_SESSION['Partwork']];?> </label></h4> 
<?php if ($_SESSION['Work'] > 1) { ?>
<h5><label> งาน <?php echo $Workname[$_SESSION['Work']];?> </label></h5>
<?php } ?>
</div>

<?php 

$OrderMonth  = $_POST['OrderMonth'];

$OrderYear   = date("Y",strtotime("-543year".$_POST['OrderYear']));

date_default_timezone_set('Asia/Bangkok');

include('config.php');


if ($_SESSION['Userlevel']== '2' || '3' || '5' || '6') {
              $sql = "SELECT orders.OrderDate,
                             orders.OrderID,
                             orders.OrderCusID,
                             orders.UserSell,
                             orders.UserSave,

                             orders.Office,
                             orders.Partwork,
                             orders.Work,

                             orders_detail.OrderID,
                             orders_detail.ProductID,
                             orders_detail.Qty,
                             orders_detail.Price,
                             

                             product.ProductID,
                             product.ProductName,
                            
                             product.Size,

                             customer.cus_name,
                             customer.cus_buss

                      FROM orders

                      INNER JOIN orders_detail 
                      ON orders.OrderID = orders_detail.OrderID

                      INNER JOIN product 
                      ON orders_detail.ProductID =  product.ProductID

                      INNER JOIN customer 
                      ON orders.OrderCusID =  customer.cus_id
                      
                      WHERE MONTH(orders.OrderDate)  = '{$OrderMonth}' AND YEAR(orders.OrderDate)  = '{$OrderYear}' 
                                                                       AND orders.Office   = '{$_SESSION['Office']}'
                                                                       AND orders.Partwork = '{$_SESSION['Partwork']}'
                                                                       AND orders.Work     = '{$_SESSION['Work']}' ";


}
if ($_SESSION['Userlevel']=='1') {
        $sql = "SELECT orders.OrderDate,
                             orders.OrderID,
                             orders.OrderCusID,
                             orders.UserSell,
                             orders.UserSave,

                             orders.Office,
                             orders.Partwork,
                             orders.Work,

                             orders_detail.OrderID,
                             orders_detail.ProductID,
                             orders_detail.Qty,
                             orders_detail.Price,
                             

                             product.ProductID,
                             product.ProductName,
                            
                             product.Size,

                             customer.cus_name,
                             customer.cus_buss

                      FROM orders

                      INNER JOIN orders_detail 
                      ON orders.OrderID = orders_detail.OrderID

                      INNER JOIN product 
                      ON orders_detail.ProductID =  product.ProductID

                      INNER JOIN customer 
                      ON orders.OrderCusID =  customer.cus_id
                      
                      WHERE MONTH(orders.OrderDate)  = '{$OrderMonth}' AND YEAR(orders.OrderDate) ";
}
              $result = $conn->query($sql);?>
                
       
        

          <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info" border="1">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">NO.</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">วันที่สั่งซื้อ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">เลขที่สั่งซื้อ</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">IDลูกค้า</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ลูกค้า</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ชื่อร้านค้า</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">รหัสสินค้า</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">สินค้า</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ปริมาณ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ราคา</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">จำนวน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">สำนัก</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ส่วนงาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">งาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ผู้ขาย</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ผู้บันทึก</th>

                </tr>
              </thead>
              <tbody>
                <?php
                    $Total = 0;
                    $SumTotal = 0;
                    $count_row = 1;
      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $OrderDate   = $row['OrderDate'];
                    $OrderID     = $row['OrderID'];
                    $ProductID   = $row['ProductID'];
                    $OrderCusID  = $row['OrderCusID'];
                    $Qty         = $row['Qty'];
                    $ProductName = $row['ProductName'];
                    $Price       = $row['Price'];
                    $Size        = $row['Size'];

                    $Office     = $row['Office'];
                    $Partwork   = $row['Partwork'];
                    $Work       = $row['Work'];

                    $UserSell        = $row['UserSell'];
                    $UserSave        = $row['UserSave'];


                    $cus_name    = $row['cus_name'];
                    $cus_buss    = $row['cus_buss'];

                    $Total       = $row["Qty"] * $row["Price"];
                    $SumTotal    = $SumTotal + $Total;

                    ?>
                    <tr>
                        <td><center><?php echo $count_row; ?></center></td>
                        <td><center><?php echo date("d /m /Y H:i:s",strtotime("+543year".$OrderDate));?></center></td>
                        <td><center><?php echo $OrderID;?></center></td>

                        <td><center><?php echo $OrderCusID;?></center></td>
                        <td><center><?php echo $cus_name;?></center></td>
                        <td><center><?php echo $cus_buss;?></center></td>

                        <td><center><?php echo $ProductID;?></center></td>
                        <td><center><?php echo $ProductName;?></center></td>
                        <td><center><?php echo $Size;?></center></td>
                        <td><center><?php echo number_format($Price,2) ;?></center></td>
                        <td><center><?php echo $Qty;?></center></td>
                        <td><center><?php echo $Officename[$Office];?></center></td>
                        <td><center><?php echo $Partworkname[$Partwork];?></center></td>
                        <td><center><?php echo $Workname[$Work];?></center></td>
                        <td><center><?php echo $UserSell;?></center></td>
                        <td><center><?php echo $UserSave;?></center></td>


                    </tr>
                    
               <?php $count_row++; } ?>
                                    
              </tbody>
                 
            </table>
                <div align="right">
            <b>Sum Total = </b>
            <input type="text" value="<?php echo number_format($SumTotal,2);?>" style="width: 90px;" disabled="disabled" readonly="readonly"></div> 
            </div>
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


          