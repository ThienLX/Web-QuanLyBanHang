<?php
	session_start();
	include 'db.php';
	$user = $_POST["username"];
	$password = $_POST["password"];

	$sql = "select * from user where username ='$user' and password = '$password'";
	$query = mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($query);
	
	if(mysqli_num_rows($query) >0 && $row['level'] == 1){
		//đăng nhập thành công admin
		$_SESSION["username"] = $user;
		header('location:quantri.php');
	}else if(mysqli_num_rows($query) >0 && $row['level'] != 1){
		//đăng nhập thành công user
		$_SESSION["username"] = $user;
		header('location:admin.php');
	}else{
		//đăng nhập thất bại
		header('location:index.php');
	}
?>
