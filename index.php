<?php
 @session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PWO ProductSeller</title>
</head>
<body>
<?php 
include('config.php');
include("form_login.php");
?>

<table width="800" align="center">
    <center><h3><u>Menu List</u></h3></center>
    <tr>
        <td>สินค้า</td>
        <td>
            <a href="product.php">สั่งซื้อสินค้า</a>
        </td>
    </tr>
     <tr>
        <td></td>
        <td>
            <a href="order_list.php">รายการสั่งซื้อสินค้า</a>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <a href="insert_p.php">เพิ่มสินค้า</a>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <a href="add_product.php">แก้ไขสินค้า</a>
        </td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
         <td>
            <hr>
        </td>
    </tr>

<tr>
        <td>ลูกค้า</td>
        <td>
            <a href="customer_list.php">รายชื่อลูกค้า</a>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <a href="insert_c.php">เพิ่มรายชื่อลูกค้า</a>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <a href="customer_edit.php">แก้ไขรายชื่อลูกค้า</a>
        </td>
    </tr>
  <tr>
        <td>
            <hr>
        </td>
         <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>รายงานยอดขาย</td>
        <td>
             <a href="report_quater.php">ยอดขายรายไตรมาศ</a>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
             <a href="report_year.php">ยอดขายรายปี</a>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
             <a href="report_month.php">ยอดขายรายเดือน</a>
        </td>
    </tr>
      <tr>
        <td>
            <hr>
        </td>
         <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>ผู้ใช้งานระบบ</td>
        <td>
            <a href="user_list.php">รายการผู้ใช้งาน</a>
        </td>
    </tr>
       <tr>
        <td></td>
        <td>
             <a href="form_register.php">เพิ่มผู้ใช้งานใหม่</a>
        </td>
    </tr>
       

</table>



</body>
</html>









