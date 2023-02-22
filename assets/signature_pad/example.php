<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ทำแบบฟอร์มที่บันทึกลายเซ็นได้ (Signature Pad)</title>
<STYLE type=text/css>
  A:link { color: #0000cc; text-decoration:none}
  A:visited {color: #0000cc; text-decoration: none}
  A:hover {color: red; text-decoration: none}
 </STYLE>
<style type="text/css">
<!--
small { font-family: Arial, Helvetica, sans-serif; font-size: 9pt; } 
input, textarea,select { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
b { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
big { font-family: Arial, Helvetica, sans-serif; font-size: 14pt; } 
strong { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; font-weight : extra-bold; } 
font, td { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
BODY { font-size: 11pt; font-family: Arial, Helvetica, sans-serif; } 
-->
</style>


<link href="./css/jquery.signaturepad.css" rel="stylesheet">
<script src="./js/jquery_1_10_2.min.js"></script>
<script src="./js/numeric-1.2.6.min.js"></script> 
<script src="./js/bezier.js"></script>
<script src="./js/jquery.signaturepad.js"></script> 

<script type='text/javascript' src="./js/html2canvas.js"></script>
<script src="./js/json2.min.js"></script>

<style type="text/css">
#signArea{
	width:304px;
	margin: 0px auto;
}
.sign-container {
	width: 60%;
	margin: auto;
}
.sign-preview {
	width: 150px;
	height: 50px;
	border: solid 1px #CFCFCF;
	margin: 10px 5px;
}
</style>

</head>

<body>

<div align="center"><h2>ทำแบบฟอร์มที่บันทึกลายเซ็นได้ (Signature Pad)</h2></div>

<div align="center">

ลองกรอกแบบฟอร์มพร้อมเซ็นชื่อด้านล่างครับ<br><br>

<table border="1" cellpadding="5" cellspacing="2" style="border-collapse: collapse" bordercolor="#111111" width="450">
  <tr>
    <td width="120"><div align="left"><b>ชื่อ - นามสกุล :</b></div></td>
	<td width="330"><div align="left"><input type="text" name="fullname" id="fullname" size="30"></div></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b>ลายเซ็น :</b></div></td>
	<td><div align="left">
	
	<div id="signArea" >
		<small>โปรดเซ็นชื่อที่ช่องว่างด้านล่าง [ <a href="#" id="btnClearSign">ลบลายเซ็น</a> ]</small> 
		
		<div class="sig sigWrapper" style="height:auto;">
			<div class="typed"></div>
			<canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
		</div>
	</div>
	
	</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input name="submit_bt" id="submit_bt" value="บันทึก" type="button"></div></td>
  </tr>
</table>  

<br><br>
<b><u>ไฟล์รูปลายเซ็นในระบบ</u></b>
<br><br>
		
		<div class="sign-container">
		<?php
		$image_list = glob("./doc_signs/*.png");
		foreach($image_list as $image){
			//echo $image;
		?>
		<img src="<?php echo $image; ?>" class="sign-preview" />
		<?php
		
		}
		?>
		</div>
		
		
		<script>
			$(document).ready(function() {
				$('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
			});
			
			$("#btnClearSign").click(function(e){
				$('#signArea').signaturePad().clearCanvas();
			});
			
			$("#submit_bt").click(function(e){
				
				// Validate Field ที่กรอกเข้ามา
				fullname_fld = document.getElementById('fullname');
				
				if (fullname_fld.value == "") {
					alert( "โปรดกรอก ชื่อ - นามสกุล ด้วย" );
					fullname_fld.focus();
					return false ;
				}
				
				if (isCanvasBlank(document.getElementById('sign-pad'))) {
					alert('โปรดเซ็น ลายเซ็น ด้วย');
					return false ;
				}
				
				// บันทึกลงฐานข้อมูล
				html2canvas([document.getElementById('sign-pad')], {
					onrendered: function (canvas) {
						var canvas_img_data = canvas.toDataURL('image/png');
						var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
						
						//ajax call to save image inside folder
						$.ajax({
							url: 'save_sign.php',
							data: { img_data:img_data , fullname:fullname_fld.value },
							type: 'post',
							dataType: 'json',
							success: function (response) {
							   
							   //alert(response.id); // ใช้ response.ชื่อ Key ในการดึงข้อมูลที่ส่งกลับมา
							   //window.location.href = response.file_name;
							   
							   alert("บันทึกข้อมูลเรียบร้อยแล้ว !!\n\nข้อความส่งกลับ : " + response.id);
							 							   
							   window.location.reload();
							   
							}
						});
					}
				});
			});
			
			function isCanvasBlank(canvas) {
				
				txt_tmp = canvas.toDataURL();
								
				//console.log(canvas.toDataURL());
				
				if((txt_tmp.length == 1162) | (txt_tmp.length == 1178) | (txt_tmp.length == 586) | (txt_tmp.length == 594) | (txt_tmp.length == 642) | (txt_tmp.length == 654))
					return true;
				else
					return false;
				
			}
		</script> 


</div>

<br>

<center>
	<hr width="90%"><br>
	พัฒนาโดย : <a href="http://www.lisenme.com" target="_blank">http://www.lisenme.com</a><br><br>
	ปรับปรุงเพิ่มเติมโดย : <a href="http://www.codetukyang.com" target="_blank">http://www.codetukyang.com</a>
	
	<br><br><hr width="90%">
</center>


</body>

</html>