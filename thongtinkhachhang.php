<?php 
	require_once 'db.php';
?>

<?php
	$sql = "select * from khach_hang";
	$query = mysqli_query($connect,$sql);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web shop</title>
<link rel="stylesheet" href="./css/base.css">
<link rel="stylesheet" href="./css/resetCSS.css">
<link rel="stylesheet" href="./css/quantri.css">
</head>
	
<body>
	<div class="header">
		<h1 class="header-text" >Trang Thông Tin Khách Gửi Yêu Cầu Mua Hàng</h1>
		<nav class="control">
			<a href="quantri.php">
				<button class="btn btn-exit">Trở Lại</button>
			</a>
		</nav>
	</div>
	
	<div class="body">
		<h3 class="body-text">Danh sách Khách Hàng Gửi Thông Tin Mua Hàng</h3>
		<table align="center" border="1" class="table">
			<tr height ="35px">
				<th >ID</th>
				<th >Tên Khách Hàng</th>
				<th >SĐT Khách Hàng</th>
				<th >Địa Chỉ Khách Hàng</th>
				<th >ID sản phẩm</th>
				<th >Tên sản phẩm</th>
				<th >Giá sản phẩm</th>
				<th >Thời Gian</th>
			</tr>

			<?php
			while($row = mysqli_fetch_assoc($query)){?>
			<tr height ="35px">
				<td ><?php echo $row["id_kh"] ?></td>
				<td ><?php echo $row["name_kh"] ?></td>
				<td ><?php echo $row["numberphone"] ?></td>
				<td ><?php echo $row["address"] ?></td>
				<td ><?php echo $row["id_product_buy"] ?></td>
				
				
				<td ><?php $id =$row["id_product_buy"] ;
							$sql1 = "select * from product where id =$id";
							$query1 = mysqli_query($connect,$sql1); 
							$row1 = mysqli_fetch_assoc($query1);				 
							echo $row1["name"] ?>
				</td>
				<td ><?php $id =$row["id_product_buy"] ;
							$sql1 = "select * from product where id =$id";
							$query1 = mysqli_query($connect,$sql1); 
							$row1 = mysqli_fetch_assoc($query1);				 
							echo $row1["price"] ?>
				</td>
				<td ><?php echo $row["time"] ?></td>
			</tr>
			<?php }?>
		</table>
	</div>

	<script src="./js/quantri.js"></script>
</body>
</html>