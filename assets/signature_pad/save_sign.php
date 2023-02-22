<?php 
	$result = array();
	$datetime_txt = date("YmdHis");
	$imagedata = base64_decode($_POST['img_data']);
	$fullname = $_POST['fullname'];
	
	//$filename = md5(date("dmYhisA")); // กรณีต้องการเข้ารหัส MD5 ชื่อไฟล์รูป
	$filename = $datetime_txt; // ชื่อไฟล์รูป คือ วันเวลาที่บันทึก
	
	//Location to where you want to created sign image
	$file_name = './doc_signs/'.$filename.'.png';
	file_put_contents($file_name,$imagedata);
	
	// รายละเอียดข้อมูลที่จะส่งกลับ
	$result['id'] = $datetime_txt; // เลขไอดีของ Record นี้ (ในที่นี้กำหนดเป็นวันเวลาบันทึก)
	$result['file_name'] = $file_name; // ชื่อไฟล์รูปลายเซ็น
	$result['fullname'] = $fullname; // ชื่อ-นามสกุล
	echo json_encode($result);
	
?>