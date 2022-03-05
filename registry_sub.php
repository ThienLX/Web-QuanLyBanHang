<?php
	include 'db.php';
	$user_reg = $_POST["user_reg"];
	$password_reg = $_POST["password_reg"];

	$sql = "select * from user where username ='$user_reg'";
	$query = mysqli_query($connect,$sql);
	
	if(mysqli_num_rows($query) >0){
		header('location:reg_failed.php');
	}else{
		$sql1 = "insert into user (username,password,level) values ('$user_reg','$password_reg','0')";
		mysqli_query($connect,$sql1);
		
		header('location:reg_success.php');
	}
?>
