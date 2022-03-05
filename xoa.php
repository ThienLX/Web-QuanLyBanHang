<?php 
	require_once 'db.php';
?>
<?php 
	$id = $_POST["id"];
	$sql = "delete from product where id = $id";
	$query = mysqli_query($connect,$sql); 
	header('location:quantri.php');
?>