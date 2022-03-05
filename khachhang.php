<?php
	include 'db.php';

	$namekh = $_POST["name_kh"];
	$sdt = $_POST["sdt"];
	$diachi = $_POST["diachi"];
	$id_spmua = $_GET["id"];
	$sql1 = "INSERT INTO `khach_hang` (`name_kh`, `numberphone`, `address`, `id_product_buy`, `time`) VALUES ('$namekh', '$sdt', '$diachi', '$id_spmua',NOW())";
	
		$xem=mysqli_query($connect,$sql1);
		header('location:reg_success.php');
?>