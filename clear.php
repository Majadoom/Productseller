<?php

	ob_start();
	session_start();
	unset($_SESSION['intLine']);
	unset($_SESSION['strProductID']);
	unset($_SESSION['strQty']);


	header("location:show.php");
?>