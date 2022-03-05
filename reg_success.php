<?php 
	require_once 'db.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web Shop</title>
<link rel="stylesheet" href="./css/resetCSS.css"> 
<link rel="stylesheet" href="./css/base.css">
<link rel="stylesheet" href="./css/main.css">
<link rel="stylesheet" href="./font/icon/css/all.min.css">
</head>

<body>
	<div class="shop">
		<header class="header">
			<div class="grid">
				<div class="grid_row">
						<nav class="header__navbar">
					<ul class="header__navbar-list">
						<li class="header__navbar-item">
							<a href="index.php">Trang chủ</a>
							<div class="header__qrcode"><img src="./img/QRcode.png" alt="QR Code"></div>
						</li>
						<li class="header__navbar-item">
							<span class="header__navbar-no--click">Mạng xã hội</span>
							<a href=""><i class="header__navbar-icon fab fa-facebook"></i></a>
							<a href=""><i class="header__navbar-icon fab fa-youtube"></i></a>
							<a href=""><i class="header__navbar-icon fab fa-instagram"></i></a>

						</li>
					</ul>

					<ul class="header__navbar-list">
						<li class="header__navbar-item">
							<a href="">
								<i class="header__navbar-icon far fa-question-circle"></i>
								Trợ giúp
							</a>
						</li>
						<li id="header_registry" class="header__navbar-item header__navbar-item--bold">Đăng kí</li>
						<li class="header__navbar-item header__navbar-item--bold">|</li>
						<li id="header_login"  class="header__navbar-item header__navbar-item--bold">Đăng nhập</li>
					</ul>

				</nav>

				<div class="header-search">

					<div class="header__logo">
						<b style="color: blue">K</b>
						<b style="color: red">M</b>
						<b style="color: yellow">A</b>
						<b style="color:white">-</b>
						<b style="color: green">T</b>
						<b style="color: red">E</b>
						<b style="color: green">A</b>
						<b style="color: red">M</b>		
					</div>

					<div class="search">

						<input type="text" placeholder="Tìm sản phẩm,thương hiệu hoặc shop">

						<button class="icon-search">
							<i class="fas fa-search"></i>
						</button>

					</div>	

					<div class="cart">
						<i class="cart-icon fas fa-shopping-cart"></i>
						<div class="content__cart">
							<img class="cart-img" src="./img/giohang.png" alt="">
							<span class="cart-text">Chưa có sản phẩm</span>
						</div>
					</div>

				</div>
				</div>
			</div>
		</header>
		
		<div class="body">
			<div class="grid">
				<div class="grid__row">
				<div class="grid__column-1">
					<nav class="category">
						<h3 class="category__header">
							<i class="category__header--item fas fa-list-ul"></i>
							Danh Mục
						</h3>
						<ul class="category-list">
							<li class="category-item">
								<a href="" class="category-item__link">Máy Tính</a>
							</li>
							<li class="category-item">
								<a href="" class="category-item__link">Máy Ảnh</a>
							</li>
							<li class="category-item">
								<a href="" class="category-item__link">Điện Thoại</a>
							</li>
							<li class="category-item">
								<a href="" class="category-item__link">Ti Vi</a>
							</li>
						</ul>
					</nav>
				</div>
					
				<div class="grid__column-5">
					<div class="filter">
						<span class="filter__text">Sắp xếp theo</span>
						<button class="filter__btn btn">Phổ biến</button>
						<button class="filter__btn btn btn--registry">Mới nhất</button>
						<button class="filter__btn btn">Bán chạy</button>
					</div>
					
					<div class="product">
						<div class="grid__row">
							<?php
						$sql = "select * from product";
						$query = mysqli_query($connect,$sql);
							?>
					
							<div class="grid__column-1-5">
								<div class="product-item">
									<img src="./img/1.png" alt="" class="product-item__img">
									<h4 class="product-item__name">Máy ảnh Canon</h4>
									<div class="price">Giá: 21.500.000</div>
								</div>
							</div>
							
							<?php
					
								while($row = mysqli_fetch_assoc($query)){ ?>

									<div id = "<?php $row['id'] ?>" class="grid__column-1-5">
										<div class="product-item">
											<img src="<?php echo $row['img'] ?>" alt="" class="product-item__img">
											<h4 class="product-item__name"><?php echo $row['name'] ?></h4>
											<div class="price">Giá: <?php echo $row['price'] ?></div>
										</div>
									</div>

							<?php	}?>

						</div>	
					</div>			
					
				</div>
			</div>
			</div>
		</div>
		
		<footer class="footer">
			
			<div class="grid">
				<div class="grid__row">
					
					<div class="grid__column">
						<h2 class="footer__heading">Đôi nét về KMA-TEAM</h2>
						<p>Với Phương châm khách hàng là thượng đế cùng với khẩu hiệu chất lượng làm nên thương hiệu chúng tôi tin tưởng rằng:</p>
					</div>
					
					<div class="grid__column">
						<h2 class="footer__heading">Văn Phòng Công Ty</h2>
						<ul class="footer-list">
							<li><span><i class="footer-icon fas fa-map-marker-alt"></i>CS1: Số 141 - Đường Chiến Thắng - Hà Đông - Hà Nội</span></li>
							<li><span><i class="footer-icon fas fa-map-marker-alt"></i>CS2: Đà Nẵng</span></li>
							<li><span><i class="footer-icon fas fa-map-marker-alt"></i>CS3: TP Hồ Chí Minh</span></li>
						</ul>
					</div>
					
					<div class="grid__column">
						<h2 class="footer__heading">Thông Tin Liên Hệ</h2>
						<ul class="footer-list">
							<li><p>Liên hệ ngay với KMA-TEAM để nhận tư vấn, báo giá và ưu đãi.</p></li>
							<li>
								<a href="">
									<i class="footer-icon fas fa-phone"></i>
									Hotline,zalo: 0981234567
								</a>
							</li>
							<li>
								<a href="">
									<i class="footer-icon fas fa-envelope"></i>
									Gmail: team.kma@gmail.com
								</a>
							</li>
							<li>
								<a href="">
									<i class="footer-icon fab fa-facebook"></i>
									Facebook: KMA - TEAM
								</a>
							</li>
							<li>
								<a href="">
									<i class="footer-icon fab fa-youtube"></i>
									Youtube: KMA - TEAM
								</a>
							</li>

						</ul>
					</div>
					
					<div class="grid__column">
						<h2 class="footer__heading">Điều Khoản Sử Dụng</h2>
						<ul class="footer-list">
							<li><a href=""><i class="footer-icon fas fa-angle-right"></i>Chính sách và quy định chung</a></li>
							<li><a href=""><i class="footer-icon fas fa-angle-right"></i>Quy trình làm việc</a></li>
							<li><a href=""><i class="footer-icon fas fa-angle-right"></i>Chính sách thanh toán</a></li>
							<li><a href=""><i class="footer-icon fas fa-angle-right"></i>Vận chuyển - giao nhận</a></li>
							<li><a href=""><i class="footer-icon fas fa-angle-right"></i>Bảo hành - đổi trả</a></li>
							<li><a href=""><i class="footer-icon fas fa-angle-right"></i>Chính sách bảo mật</a></li>
							<li><a href=""><i class="footer-icon fas fa-angle-right"></i>Câu hỏi thường gặp</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="footer-copyright">
				<div class="grid">
					<p class="copyright-content">© 2021 Bản quyền thuộc về KMA-TEAM.Nghiêm cấm sao chép nội dung dưới mọi hình thức.</p>
				</div>
			</div>
		</footer>
	</div>

<div class="modal" style="display: block">
		<div class="modal__background">
			
			<div class="modal__body">
				<div class="modal__content">
					
					<form method="post" action="index.php">
					<div class="form">
							<h4 align="center" style="font-size: 18px;"><i style="color:#54FF03; margin-right: 10px;" class="far fa-check-circle"></i>Đăng kí tài khoản thành công</h4>
							<button type="submit" class="btn btn--registry" style="margin-left: 155px; margin-bottom: 15px;">OK</button>
						</div>
					</form>	
					
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>
