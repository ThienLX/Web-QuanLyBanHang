<?php 
	require_once 'db.php';
?>

<?php
	$sql = "select * from product";
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
		<h1 class="header-text" >Trang Quản Trị Sản Phẩm</h1>
		<nav class="control">
			<span class="control-text">Chức năng:</span>
			<button id="btn-add" class="btn btn-add">Thêm</button>
			<button id="btn-edit" class="btn btn-edit">Sửa</button>
			<button id="btn-delete" class="btn btn-delete">Xóa</button>
			<a href="thongtinkhachhang.php">
				<button class="btn btn-exit">Trang Khách Hàng</button>
			</a>
			<a href="admin.php" class="btn-exit_link">
				<button class="btn btn-exit">Trở Lại</button>
			</a>
		</nav>
	</div>
	
	<div class="body">
		<h3 class="body-text">Danh sách sản phẩm</h3>
		<table align="center" border="1" class="table">
			<tr height ="35px">
				<th width="5%">ID</th>
				<th width="20%">Tên sản phẩm</th>
				<th width="15%">Ảnh</th>
				<th width="15%">Giá(VNĐ)</th>
				<th width="15%">Danh mục</th>
				<th width="30%">Mô tả</th>
			</tr>

			<?php
			while($row = mysqli_fetch_assoc($query)){?>
			<tr height ="35px">
				<td width="5%"><?php echo $row["id"] ?></td>
				<td width="20%"><?php echo $row["name"] ?></td>
				<td width="15%"><img src="./img/<?php echo $row["img"] ?>" alt="" class="table-img"></td>
				<td width="15%"><?php echo $row["price"] ?></td>
				<td width="15%"><?php echo $row["type"] ?></td>
				<td width="30%"><?php echo $row["description"] ?></td>
			</tr>
			<?php }?>
		</table>
	</div>
<!--	bộ chức năng thêm sửa xóa-->
	
<!--		1-form add product-->
	<div id="add-product" class="modal">
		<div class="modal__background">			
			
			
			<div class="modal__body">
				<div class="modal__content">
					
					<form method="post" action="them.php" onSubmit="return check_add_product()" enctype="multipart/form-data">
						<div class="form">
							
							<h2 class="form-header">Thêm Sản Phẩm</h2>
							<div class="form-group">
								<label for="">Tên sản phẩm:</label>
								<input id="input_add_name_product" class="form__input" type="text" name = "name" required>
								<p id="err_name" style="color: red" align="left"></p>
							</div>
							<div class="form-group">
								<label for="">Ảnh sản phẩm:</label>
								<input class="form__input-img" type="file" name = "img" required>
							</div>
							<div class="form-group">
								<label for="">Giá:</label>
								<input id="input_price" class="form__input" type="text" name = "price" required>
								<p id="err_price" style="color: red" align="left"></p>
							</div>
							<div class="form-group">
								<label for="">Danh mục:</label>
								<input id="input_add_type_product" class="form__input" type="text" name = "type" required>
								<p id="err_type" style="color: red" align="left"></p>
							</div>
							<div class="form-group">
								<label for="">Mô tả:</label>
								<input id="input_add_description_product" class="form__input" type="text" name = "description" required>
								<p id="err_description" style="color: red" align="left"></p>
							</div>
							
							<div class="form__control-btn">
								<button type="submit" class="btn btn-add">THÊM</button>
								<button type="button" id="form_close_add" class="btn">TRỞ LẠI</button>
							</div>
							
						</div>
					</form>
					
				</div>
			</div>
					
		</div>
	</div>
<!--		2-form edit product-->
	<div id="edit-product" class="modal">
		<div class="modal__background">			
			
			<div class="modal__body">
				<div class="modal__content">
					
					<form method="post" action="sua.php" onSubmit="return check_edit_product()" enctype="multipart/form-data">
						<div class="form">
						
							<h2 class="form-header">Sửa Sản Phẩm</h2>
							<div class="form-group">
								<label for="">ID sản phẩm cần sửa:</label>
								<input id="input_id_edit" class="input__id" type="text" name = "id1"  required>
								<p id="err_id_edit" style="color: red" align="left"></p>
							</div>
							<div class="form-group">
								<label for="">Tên sản phẩm:</label>
								<input id="input_name_edit" class="form__input" type="text" name = "name" required>
								<p id="err_name_edit" style="color: red" align="left"></p>
							</div>
							<div class="form-group">
								<label for="">Ảnh sản phẩm:</label>
								<input class="form__input-img" type="file" name = "img" required>
							</div>
							<div class="form-group">
								<label for="">Giá:</label>
								<input id="input_price_edit" class="form__input" type="text" name = "price"  required>
								<p id="err_price_edit" style="color: red" align="left"></p>
							</div>
							<div class="form-group">
								<label for="">Danh mục:</label>
								<input id="input_type_edit" class="form__input" type="text" name = "type"  required>
								<p id="err_type_edit" style="color: red" align="left"></p>
							</div>
							<div class="form-group">
								<label for="">Mô tả:</label>
								<input id="input_description_edit" class="form__input" type="text" name = "description" required>
								<p id="err_description_edit" style="color: red" align="left"></p>
							</div>
							
							<div class="form__control-btn">
								<button class="btn btn-edit">SỬA</button>
								<button type="button" id="form_close_edit" class="btn">TRỞ LẠI</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
					
		</div>
	</div>
<!--		3-form delete produc-->
	<div id="delete-product" class="modal">
		<div class="modal__background">			
			
			
			<div class="modal__body">
				<div class="modal__content">
					
					<form method="post" action= "xoa.php" onSubmit="return check_delete_product()">
						<div class="form">
							
							<h2 class="form-header">Xóa Sản Phẩm</h2>
							<div class="form-group">
								<input id="input_xoa" class="form__input" type="text" name = "id" placeholder="Nhập ID sản phẩm cần xóa ">
								<p id="err_xoa" style="color: red" align="left"></p>
							</div>
							
							<div class="form__control-btn">
								<button type="submit" class="btn btn-delete">XÓA</button>
								<button type="button" id="form_close_delete" class="btn">TRỞ LẠI</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
					
		</div>
	</div>
								
	<script src="./js/quantri.js"></script>
</body>
</html>