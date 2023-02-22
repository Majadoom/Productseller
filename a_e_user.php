<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

    Header("Location: ../form_login.php"); 

}else{?>

    <?php

$menu = "a_e_user";

?>
<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> แก้ไขผู้ใช้งานระบบ</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
<center><a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
    <i class="fa fa-print"> พิมพ์รายการ</i></a></center>
       
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
$sql = "SELECT * FROM user WHERE IDu = '$IDu'";
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
$Phone     = $row['Phone'];
$Email     = $row['Email'];
$Regidate  = $row['Regidate'];

$Userlevel = $row['Userlevel'];

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>PWO</title>
    </head>
  
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">

<table width="550" align="center">
        
        <form action="a_e_u_update.php" method="POST">
    
<tr>
            <td><font >ID : </font></td>
            <td><input type="text" name="IDu" value="<?php echo $IDu; ?>" readonly class="form-control is-valid"/></td>
</tr>
<tr>
            <td><font >วันที่เริ่มใช้งาน : </font></td>
            <td><input type="text" name="Regidate" value="<?php echo date("d/m/Y",strtotime("+543year".$Regidate)); ?>" readonly class="form-control is-valid"/></td>
</tr>
<tr>
            <td><font >User : </font></td>
            <td><input type="text" name="Username" value="<?php echo $Username; ?>"    class="form-control is-defult"/></td>
</tr>
<tr>
            <td><font >Pass : </font></td>
            <td><input type="text" name="Password" value="<?php echo $Password; ?>"    class="form-control is-defult"/></td>
</tr>
<tr>
            <td><font >ชื่อ : </font></td>
            <td><input type="text" name="Firstname" value="<?php echo $Firstname; ?>"   class="form-control is-defult"/></td>
</tr>
<tr>
            <td><font >นามสกุล : </font></td>
            <td><input type="text" name="Lastname" value="<?php echo $Lastname; ?>"   class="form-control is-defult"/></td>
</tr>
<tr>
            <td><font >รหัสพนักงาน : </font></td>
            <td><input type="text" name="Idpass" value="<?php echo $Idpass; ?>"   class="form-control is-defult"/></td>
</tr>
<tr>
            <td><font >สำนัก : </font></td>
            <td>
                <select  name="Office" id="Office" class="form-control is-defult"  required>
        <option value="0">...</option>
        <option value="1"  title="สำนักตรวจสอบภายใน">สำนักตรวจสอบภายใน</option>
        <option value="2"  title="สำนักอำนวยการ">สำนักอำนวยการ</option>
        <option value="3"  title="สำนักทรัพยากรมนุษย์">สำนักทรัพยากรมนุษย์</option>
        <option value="4"  title="สำนักบัญชีและการเงิน">สำนักบัญชีและการเงิน</option>
        <option value="5"  title="สำนักยุทธศาสตร์และงบประมาณ">สำนักยุทธศาสตร์และงบประมาณ</option>
        <option value="6"  title="สำนักเทคโนโลยีดิจิทัล">สำนักเทคโนโลยีดิจิทัล</option>
        <option value="7"  title="สำนักนิติการ">สำนักนิติการ</option>
        <option value="8"  title="สำนักคดี">สำนักคดี</option>
        <option value="9"  title="สำนักพัฒนาธุรกิจ">สำนักพัฒนาธุรกิจ</option>
        <option value="10" title="สำนักโลจิสติกส์">สำนักโลจิสติกส์</option>
        <option value="11" title="สำนักข้าว">สำนักข้าว</option>
        <option value="12" title="สำนักเกษตร">สำนักเกษตร</option>
        <option value="13" title="สำนักสัตว์น้ำและบริหารคลัง">สำนักสัตว์น้ำและบริหารคลัง</option>
            </select> 
            </td>
</tr>
<tr>
    <td>ส่วนงาน</td>
    <td>
      <select name="Partwork" id="Partwork" class="form-control is-defult"  required>
                <option value="0">...</option>

                    <optgroup label="สำนักตรวจสอบภายใน">
                <option value="1" title="ส่วนงานตรวจสอบภายใน1">สงตส.1</option>
                <option value="2" title="ส่วนงานตรวจสอบภายใน2">สงตส.2</option>
                    </optgroup>

                    <optgroup label="สำนักอำนวยการ">
                <option value="3" title="ส่วนงานสารบรรณ">สงสบ.</option>
                <option value="4" title="ส่วนงานเลขานุการ">สงลข.</option>
                <option value="5" title="ส่วนงานงานประชุม">สงปช.</option>
                <option value="6" title="ส่วนงานประชาสัมพันธ์">สงปส.</option>
                    </optgroup>

                    <optgroup label="สำนักทรัพยากรมนุษย์">
                <option value="7" title="ส่วนงานบริหารบุคคล">สงบบ.</option>
                <option value="8" title="ส่วนงานประเมินผลและพัฒนาบุคคล">สงปพ.</option>
                <option value="9" title="ส่วนงานเงินเดือนและสวัสดิการ">สงงส.</option>
                    </optgroup>

                    <optgroup label="สำนักบัญชีและการเงิน">
                <option value="10" title="ส่วนงานรายได้และลูกหนี้">สงรล.</option>
                <option value="11" title="ส่วนงานการเงิน">สงกง.</option>
                <option value="12" title="ส่วนงานบัญชีและรายงาน">สงบร.</option>
                <option value="13" title="ส่วนงานบัญชีสินค้าและต้นทุน">สงบต.</option>
                    </optgroup>

                    <optgroup label="สำนักยุทธศาสตร์และงบประมาณ">
                <option value="14" title="ส่วนงานวางแผนยุทศาสตร์">สงวย.</option>
                <option value="15" title="ส่วนงานงบประมาณ">สงงป.</option>
                <option value="16" title="ส่วนงานบริหารความเสี่ยงและควบคุมภายใน">สงสค.</option>
                <option value="17" title="ส่วนงานพัสดุ">สงพด.</option>
                    </optgroup>

                    <optgroup label="สำนักเทคโนโลยีดิจิทัล">
                <option value="18" title="ส่วนงานพัฒนาเทคโนโลยี">สงพท.</option>
                <option value="19" title="ส่วนงานอุปกรณ์และเครือข่าย">สงบข.</option>
                    </optgroup>

                    <optgroup label="สำนักนิติการ">
                <option value="20" title="ส่วนงานที่ปรึกษากฎหมาย">สงปก.</option>
                <option value="21" title="ส่วนงานบริหารสัญญา">สงบญ</option>
                <option value="22" title="ส่วนงานวินัย">สงวน.</option>
                    </optgroup>

                    <optgroup label="สำนักคดี">
                <option value="23" title="ส่วนงานคดีแพ่งและปกครอง1">สงคป.1</option>
                <option value="24" title="ส่วนงานคดีแพ่งและปกครอง2">สงคป.2</option>
                <option value="25" title="ส่วนงานคดีอาญา">สงคอ.</option>
                <option value="26" title="ส่วนงานบังคับคดี">สงบค.</option>
                    </optgroup>

                    <optgroup label="สำนักพัฒนาธุรกิจ">
                <option value="27" title="ส่วนงานการตลาดออนไลน์และออฟไลน์">สงตอ.</option>
                <option value="28" title="ส่วนงานพัฒนาผลิตภัณฑ์">สงพผ.</option>
                <option value="29" title="ส่วนงานผู้ประกอบการจำหน่ายอาหาร">สงผจ.</option>
                    </optgroup>

                    <optgroup label="สำนักโลจิสติกส์">
                <option value="30" title="ส่วนงานร้านค้า">สงรค.</option>
                <option value="31" title="ส่วนงานบริหารการขนส่ง">สงบส.</option>
                <option value="32" title="ส่วนงานปศุสัตว์">สงปศ.</option>
                <option value="33" title="ภาครัฐและเอกชน">สงรอ.</option>
                    </optgroup>

                    <optgroup label="สำนักข้าว">
                <option value="34" title="ส่วนงานข้าวหอม">สงขห.</option>
                <option value="35" title="ส่วนงานข้าวสาร">สงขส.</option>
                <option value="36" title="ส่วนงานข้าวชนิดพิเศษ">สงขช.</option>
                <option value="37" title="ส่วนงานโครงการรัฐ">สงคก.</option>
                    </optgroup>
                   
                    <optgroup label="สำนักเกษตร">
                <option value="38" title="ส่วนงานเกษตร1">สงกษ.1</option>
                <option value="39" title="ส่วนงานเกษตร2">สงกษ.2</option>
                <option value="40" title="ส่วนงานเกษตร3">สงกษ.3</option>
                    </optgroup>

                    <optgroup label="สำนักสัตว์น้ำและบริหารคลัง">
                <option value="41" title="ส่วนงานคลัง1และภูมิภาค">สงคล.1</option>
                <option value="42" title="ส่วนงานคลัง2">สงคล.2</option>
                <option value="43" title="ส่วนงานสัตว์น้ำ">สงสน.</option>
                    </optgroup>
            </select>
    </td>
</tr>
<tr>
    <td>งาน</td>
    <td>
      <select name="Work" id="Work" class="form-control is-defult"  required>
                <option value="0">...</option>
                <option value="1">ไม่มีสังกัดงาน</option>
            <optgroup label="สำนักทรัพยากรมนุษย์(ส่วนงานประเมินผลและพัฒนาบุคคล)">
                <option value="2" title="งานประเมินผลและพัฒนาบุคคล">งปพ.</option>
                <option value="3" title="งานศูนย์บริการการต่อต้านทุจริตและบริการประชาชน">งปท.</option>
            </optgroup>
            <optgroup label="สำนักนิติการ(ส่วนงานที่ปรึกษากฏหมาย)">
                <option value="4" title="งานสืบสวนสอบสวน">งสส.</option>
            </optgroup>
            <optgroup label="สำนักข้าว(ส่วนงานโครงการรัฐ)">
                <option value="5" title="งานสัญญาซื้อขาย">งสข.</option>
                <option value="6" title="งานปิดบัญชีโครงการ">งปค.</option>
                <option value="7" title="งานปิดบัญชี">งปบ.</option>
                <option value="8" title="งานค่าใช้จ่าย">งคจ.</option>
                <option value="9" title="งานคดีและอื่นๆ">งคอ.</option>
            </optgroup>
            </select>
    </td>
</tr>





<tr>
            <td><font >เบอร์โทร : </font></td>
            <td><input type="text" name="Phone" value="<?php echo $Phone; ?>"   class="form-control is-defult"/></td>
</tr>
<tr>
            <td><font >อีเมล์ : </font></td>
            <td><input type="text" name="Email" value="<?php echo $Email; ?>"   class="form-control is-defult"/></td>
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
            <td><font >สถานะผู้ใช้ :</font> </td>
            <td><select name="Userlevel" id="Userlevel" style="width:220px" class="form-control is-warning">
                <option value="1">แอดมิน</option>
                <option value="2">ลูกจ้าง</option>
                <option value="3">พนักงาน</option>
                <option value="5">หัวหน้าส่วนงาน</option>
                <option value="6">ผู้อำนวยการสำนัก</option>
                <option value="4">**ยกเลิกใช้งาน**</option>

        </select>           
          </td>
</tr>
<tr>
            <td><font >เปิดใช้งานโดย:</font></td>
            <td><input type="text" name="Name_Up" value="<?php echo $_SESSION['Idpass']." ".$_SESSION['User']; ?>" required  class="form-control is-valid" readonly="readonly"/></td>
</tr>
<tr>
  <td>
    <hr>
  </td>
  <td>
    <hr>
  </td>
</tr>
<tr><td></td>
            <td><button type="submit" class="btn btn-success btn-lg">ยืนยันข้อมูล</button></td>
          </tr>


        </form>
        </table>
        <script>
            document.getElementById('Userlevel').value   = '<?php echo $Userlevel; ?>';
             document.getElementById('Partwork').value   = '<?php echo $Partwork; ?>';
              document.getElementById('Office').value    = '<?php echo $Office; ?>';
               document.getElementById('Work').value     = '<?php echo $Work; ?>';
            
            
        </script>

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