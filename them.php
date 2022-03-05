<?php 
	require_once 'db.php';
?>
<?php
	$name = $_POST["name"];
	
	$img = $_FILES["img"]["name"];
	$img_tmp = $_FILES["img"]["tmp_name"];

	$price = $_POST["price"];
	$type = $_POST["type"];
	$description = $_POST["description"];
							
	$sql = "insert into product (img,name,price,type,description)
						value('$img', '$name', '$price','$type', '$description')";
							
	$query = mysqli_query($connect,$sql);
	move_uploaded_file($img_tmp,'img/'.$img);
	header('location:quantri.php');
						
?>