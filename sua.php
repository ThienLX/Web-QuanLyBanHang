<?php 
	require_once 'db.php';
?>
<?php
	$id = $_POST['id1'];
	$name = $_POST["name"];
	
	$img = $_FILES["img"]["name"];
	$img_tmp = $_FILES["img"]["tmp_name"];

	$price = $_POST["price"];
	$type = $_POST["type"];
	$description = $_POST["description"];
							
	$sql = "update product set img='$img',name='$name',price='$price',type='$type',description='$description' where id='$id'";

	$query = mysqli_query($connect,$sql);
	move_uploaded_file($img_tmp,'img/'.$img);
	header('location:quantri.php');
						
?>