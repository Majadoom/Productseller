<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "form_register";

?>

<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> เพิ่มข้อมูลผู้ใช้งานระบบ</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Product Seller</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){

   $("#Username").keyup(function(){

      var Username = $(this).val().trim();
    
      if(Username != ''){


         $.ajax({
            url: 'check.php',
            type: 'post',
            data: {Username: Username},
            success: function(response){


                $('#uname_response').html(response);

             }
         });
      }else {

         $("#uname_response").html("");

      }

    });

 });
</script>
</head>
<body>

	<form action="form_reg_in.php" method="POST" >
		<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" border="1" >
		<tr>
			<td width="80">Username</td>
			<td>
				<input type="text" name="Username" id="Username" value="" pattern="[A-Za-z0-9]{5,}" title="กรอก Username ภาษาอังกฤษตัวเล็ก+ภาษาอังกฤษตัวใหญ่หรือตัวเลข รวมกันโดยไม่เว้นวรรค 5 ตัวอักษรขึ้นไป " required class="form-control is-warning" style="width: 200px;">
				 <div id="uname_response" ></div>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="text" name="Password" value="" required class="form-control is-warning" style="width: 200px;">
			</td>
		</tr>
			
		<tr>
			<td>ชื่อ</td>
			<td>
				<input type="text" name="Firstname" value="" required class="form-control is-warning" style="width: 200px;">
			</td>
		</tr>
		<tr>
			<td>นามสกุล</td>
			<td>
				<input type="text" name="Lastname" value="" required class="form-control is-warning" style="width: 200px;">
			</td>
		</tr>
			<tr>
			<td>รหัสพนักงาน</td>
			<td>
				<input type="text" name="Idpass" value="" required class="form-control is-warning" style="width: 200px;">
			</td>
		</tr>
<tr>
	<td>สำนัก</td>
	<td>
      <select  name="Office" id="Office" class="form-control is-warning" style="width: 300px;" required>
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
      <select name="Partwork" id="Partwork" class="form-control is-warning" style="width: 300px;" required>
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
      <select name="Work" id="Work" class="form-control is-warning" style="width: 300px;" required>
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
			<td>เบอร์โทร</td>
			<td>
				<input type="text" name="Phone" value=""  class="form-control is-warning" style="width: 200px;">
			</td>
		</tr>
			<tr>
			<td>อีเมลล์</td>
			<td>
				<input type="text" name="Email" value=""  class="form-control is-warning" style="width: 200px;">
			</td>
		</tr>
		<tr>
			<td>ระดับผู้ใช้</td>
			<td>
				<select name="Userlevel" id="Userlevel" class="form-control is-warning" style="width: 200px;" required>
					<option value="">...</option>
					<option value="3">พนักงาน</option>
					<option value="2">ลูกจ้าง</option>
					<option value="1">แอดมิน</option>
				</select>
			</td>
		</tr>
		<tr><td></td>
			<td>
				<input type="reset" value="RESET" class="btn btn-warning">
				<input type="submit" value="SUBMIT" class="btn btn-success">
			</td>
		</tr>
		</table>
	</form>
	
</body>
</html>

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