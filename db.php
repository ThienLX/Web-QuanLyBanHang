<?php
	$connect = mysqli_connect("localhost","root","","webshop");
	if($connect){
		mysqli_query($connect,"SET NAMES 'UTF8'");
	}else{
		echo "kết nối thất bại";
	}
?>
