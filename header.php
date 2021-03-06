<!DOCTYPE html>
<html lang="vn">
<head>
	<meta charset="UTF-8">
	<meta content="minimum-scale=1.0, maximum-scale=2.0, width=device-width, user-scalable=yes" name="viewport" />
	<title>Nha khoa Canary</title>
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/icomoon.css"/>
	<link href="css/all.css" rel="stylesheet"> <!--load all styles -->
	<link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css"/>
	<link rel="stylesheet" href="js/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
	<link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=9"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=9"/>
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="js/video/video.css?v=9">
	<script type="text/javascript" src="js/slick/slick.min.js"></script>
</head>
<body>
<div class="slidebar">
	<div class="mobile-wrap-menu">
		<div class="head">
			<span class="icon closeSidebar"><i class="fas fa-times-circle"></i></span>
		</div>
		<div class="content"></div>
	</div>	
</div>
<div id="main-page">
	<header class="header">
		<div class="top">
			<div class="container row align-items-start">
				<div class="col-lg-4 col-3 mobile-language">
					<select class="form-select language-select">
					  <option selected>EN</option>
					  <option value="1">VI</option>
					  <option value="2">JA</option>
					</select>
			    </div>
			    <div class="col-3 mobile-space">
			    </div>
				<div class="col-lg-4 time">
			      <ul>
			      	<li>090 999 999</li>
			      	<li>8:00 - 20:00, HÀNG NGÀY</li>
			      </ul>
			    </div>
			    <div class="col-lg-5 language">
			      	<a href="#" class="item"><img src="images/icon/en-lang.jpg" alt="English"></a>
			      	<a href="#" class="item"><img src="images/icon/vi-lang.jpg" alt="English"></a>
			      	<a href="#" class="item"><img src="images/icon/jp-lang.jpg" alt="English"></a>
			      	<a href="#" class="item login" data-bs-toggle="modal" data-bs-target="#login-form">Log in</a>
			    </div>
			    <div class="col-lg-3 col-6 socical">
			      	<div class="item">FOLLOW US</div>
			      	<div class="item"><a href="#"><img src="images/icon/fb.svg" alt=""></a></div>
			      	<div class="item"><a href="#"><img src="images/icon/yt.svg" alt=""></a></div>
			      	<div class="item"><a href="#"><img src="images/icon/in.svg" alt=""></a></div>
			      	<div class="item"><a href="#"><img src="images/icon/tiktok.svg" alt=""></a></div>
			    </div>
			</div>
		</div>
		<div class="bottom">
		 	<div class="container row align-items-start align-items-stretch">
			    <div class="col-lg-2 col-sm-12">
			    	<div class="logo d-lg-flex d-sm-flex d-xs-flex justify-content-sm-start flex-lg-column">
			     		<a class="imgage" href="index.php"><img src="images/logo.png" alt=""></a>
			     		<h1 class="logo-text"><a href="index.php">NHA KHOA CANARY <sup class="registered">&reg;</sup></a> <br>
			     			<span class="since">SINCE 2005</span>
			     		</h1>
			    	</div>
			    	<div class="js-menu-mobile"><div class="trigger-menu"><span class="three-bars-icon"></span></div></div>
			    	<div class="mobile-menu-wraper" id="mobile-menu-wraper">
			    		<div class="mobile-top d-flex justify-content-sm-start align-items-sm-center">
			    			<a href="#" class="mobile-login" data-bs-toggle="modal" data-bs-target="#login-form">LOG IN</a>
				    		<div class="mobile-search">
				    			<div class="search">
						      		<div class="input-group">
										<input type="text" class="form-control" aria-describedby="button-search">
										<button class="btn btn-outline-secondary" type="button" id="button-search"><i class="far fa-search"></i></button>
									</div>
						      	</div>
				    		</div>
			    		</div>
			    		<div class="mobile-bottom mobile-nav"></div>
			    		<div class="mobile-time row">
			    			<div class="col-6 d-flex justify-content-star">
			    				090 999 999
			    			</div>
			    			<div class="col-6 d-flex justify-content-end">
			    				8:00 - 20:00, HÀNG NGÀY
			    			</div>
			    		</div>
			    	</div>
			    </div>
			    <div class="nav-desktop col-lg-8 d-lg-flex align-items-center">
			    	<div class="main-nav">
			    		<ul class="nav d-flex justify-content-center">
					      	<li><a href="gioi-thieu.php">GIỚI THIỆU</a>
					      		<ul>
							      	<li><a href="gioi-thieu.php">Về Nha khoa</a></li>
							      	<li><a href="dich-vu.php">Bác sĩ chuyên khoa</a></li>
							      	<li><a href="bang-gia.php">Các chứng nhận của Bác sĩ</a></li>
							      	<li><a href="chinh-sach-bao-hanh.php">Giới thiệu về Phòng khám</a></li>
							      	<li><a href="dat-hen.php">Quy trình kiểm soát vô trùng</a></li>
							      	<li><a href="thu-vien.php">Tin tức về Canary</a></li>
							    </ul>
					      	</li>
					      	<li><a href="dich-vu.php">DỊCH VỤ</a>
					      		<ul>
							      	<li><a href="dich-vu-2.php">Nha chu</a></li>
							      	<li><a href="dich-vu-2.php">Tẩy trắng răng</a></li>
							      	<li><a href="dich-vu-2.php">Phục hồi</a></li>
							      	<li><a href="dich-vu-2.php">Phục hình sứ</a></li>
							      	<li><a href="dich-vu-2.php">Hàm tháo lắp</a></li>
							      	<li><a href="dich-vu-2.php">Nhổ răng - Tiểu phẫu</a></li>
							      	<li><a href="dich-vu-2.php">Chỉnh nha</a></li>
							      	<li><a href="dich-vu-2.php">Cấy ghép Implant</a></li>
							      	<li><a href="dich-vu-2.php">Điều trị cắn khớp</a></li>
							      	<li><a href="dich-vu-2.php">Điều trị khác</a></li>
							    </ul>
					      	</li>
					      	<li><a href="bang-gia.php">BẢNG GIÁ</a>
					      		<ul>
							      	<li><a href="bang-gia.php">Nha chu</a></li>
							      	<li><a href="bang-gia.php">Tẩy trắng răng</a></li>
							      	<li><a href="bang-gia.php">Phục hồi</a></li>
							      	<li><a href="bang-gia.php">Phục hình sứ</a></li>
							      	<li><a href="bang-gia.php">Hàm tháo lắp</a></li>
							      	<li><a href="bang-gia.php">Nhổ răng - Tiểu phẫu</a></li>
							      	<li><a href="bang-gia.php">Chỉnh nha</a></li>
							      	<li><a href="dbang-gia.php">Cấy ghép Implant</a></li>
							      	<li><a href="bang-gia.php">Điều trị cắn khớp</a></li>
							      	<li><a href="bang-gia.php">Điều trị khác</a></li>
							    </ul>
					      	</li>
					      	<li><a href="chinh-sach-bao-hanh.php">CHÍNH SÁCH BẢO HÀNH</a>
					      		<ul>
							      	<li><a href="chinh-sach-bao-hanh.php">Bảo hành Điều trị</a></li>
							      	<li><a href="chinh-sach-bao-hanh.php">Quy định Thanh toán</a></li>
							    </ul>
					      	</li>
					      	<li><a href="dat-hen.php">ĐẶT HẸN</a></li>
					      	<li><a href="thu-vien.php">THƯ VIỆN</a></li>
					      	<li><a href="ho-so-khach-hang.php">HỒ SƠ KHÁCH HÀNG</a></li>
					      	<li><a href="kien-thuc-nha-khoa.php">KIẾN THỨC NHA KHOA</a></li>
					      	<li><a href="uu-dai.php">ƯU ĐÃI</a>
					      		<ul>
							      	<li><a href="uu-dai-lien-ket-bao-hiem.php">Liên kết bảo hiểm</a></li>
							      	<li><a href="uu-dai-lien-ket-ngan-hang.php">Liên kết trả góp ngân hàng</a></li>
							      	<li><a href="uu-dai-du-lich-nha-khoa.php">Du lịch nha khoa</a></li>
							      	<li><a href="uu-dai-khac.php">Ưu đãi cho Sinh viên</a></li>
							      	<li><a href="uu-dai-khac.php#tu-hanh">Ưu đãi cho Quý tu hành</a></li>
							    </ul>
					      	</li>
					      	<li><a href="lien-he.php">LIÊN HỆ</a></li>
					    </ul>
			    	</div>	
			    </div>
			    <div class="search-desktop col-lg-2 d-lg-flex align-items-center">
			      	<div class="search">
			      		<div class="input-group">
							<input type="text" class="form-control" aria-describedby="button-search">
							<button class="btn btn-outline-secondary" type="button" id="button-search"><i class="far fa-search"></i></button>
						</div>
			      	</div>		
			    </div>
			 </div>
		</div>
	</header>
	<div class="modal login-form" id="login-form" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-body">
		        <div class="box">
		        	<div class="row">
			        	<div class="col-lg-12 form-froup">
			        		<input type="text" name="username" class="form-control" autocomplete="off" placeholder="Địa chỉ Email">
			        	</div>
			        	<div class="col-lg-12 form-froup">
			        		<input type="password" name="password"  class="form-control" autocomplete="off" placeholder="Mật khẩu">
			        	</div>
			        	<div class="col-lg-12 d-flex justify-content-center mt-3rem">
			        		<button>ĐĂNG NHẬP</button>
			        	</div>
			        </div>
				    <div class="row d-flex justify-content-center mt-3rem text-center text-white footer-link">
				        <p>Bằng cách tạo tài khoản, bạn đồng ý và chấp nhận <br> <a href="#">Điều khoản</a> và <a href="#">Chính sách bảo mật</a> của chúng tôi.</p>
				    </div>
		        </div>
		    	<div class="footer d-flex justify-content-center text-center text-white footer-link mt-3rem" style="border-top: 1px solid #fff;">
		        	<p>Bạn chưa có tài khoản? <a href="#" id="register-form-show">Đăng ký ngay</a></p>
		        </div>
		    </div>
	    </div>
	  </div>
	</div>

	<div class="modal login-form" id="register-form" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-body">
		        <div class="box">
		        	<div class="row">
		        		<div class="col-lg-12 form-froup">
			        		<input type="text" name="username" class="form-control" autocomplete="off" placeholder="Họ và Tên">
			        	</div>
			        	<div class="col-lg-12 form-froup">
			        		<input type="text" name="username" class="form-control" autocomplete="off" placeholder="Địa chỉ Email">
			        	</div>
			        	<div class="col-lg-12 form-froup">
			        		<input type="password" name="password"  class="form-control" autocomplete="off" placeholder="Mật khẩu">
			        	</div>
			        	<div class="col-lg-12 d-flex justify-content-center mt-3rem">
			        		<button>ĐĂNG KÝ</button>
			        	</div>
			        </div>
				    <div class="row d-flex justify-content-center mt-3rem text-center text-white footer-link">
				        <p>Bằng cách tạo tài khoản, bạn đồng ý và chấp nhận <br> <a href="#">Điều khoản</a> và <a href="#">Chính sách bảo mật</a> của chúng tôi.</p>
				    </div>
		        </div>
		    </div>
	    </div>
	  </div>
	</div>