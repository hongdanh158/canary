<?php include('header.php') ?>
	<section class="block block-customer-information">
		<div class="container">
			<div class="d-flex justify-content-center">
				<h2 class="block-title">HỒ SƠ <span class="highlight">KHÁCH HÀNG</span></h2>
			</div>
			<div class="block-content container row">
				<div class="col-md-12 d-flex justify-content-end mb-5">
					 <a class="btn btn-outline-primary" href="#">Tìm hiểu thêm</a>
				</div>
				<div class="col-md-12 customer-information-conent background-light-primary">
					<div class="row header-form">
						<div class="col-md-6 d-flex align-items-center">
							<p class="customer-information-title">HỒ SƠ BỆNH NHÂN <br> <span class="customer-id">MÃ HỒ SƠ: NKCNR001</span></p>
							
						</div>
						<div class="col-md-6 d-flex justify-content-end">
							<div class="logo">
					     		<a class="imgage" href="index.php"><img src="images/logo.png" alt=""></a>
					     		<h1 class="logo-text"><a href="index.php">NHA KHOA CANARY <sup class="registered">&reg;</sup></a></h1>
					     		<span class="since">Since 2015</span>
					    	</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<form>
								<p class="header-title  d-flex justify-content-center"><strong class="highlight">THÔNG TIN CỦA BỆNH NHÂN</strong></p>
								<div class="row mb-3">
									<div class="col-md-5 row">
	                        			 <label for="appointment" class="col-sm-4 col-form-label">Ngày bắt đầu: <sup class="required">*</sup></label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control datepicker" readonly placeholder="DD-MM-YYYY" id="start-date">
									    </div>
	                        		</div>
								</div>
	                        	<div class="row mb-3">
	                        		<div class="col-md-5 row">
	                        			<label for="name" class="col-sm-4 col-form-label">Họ và Tên <sup class="required">*</sup></label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control" autocomplete="off"  id="name">
									    </div>
	                        		</div>
								    <div class="col-md-4 row">
	                        			<label for="birthday" class="col-sm-4 col-form-label">Năm sinh: <sup class="required">*</sup></label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control datepicker" autocomplete="off" name="birthday"  id="birthday">
									    </div>
	                        		</div>
	                        		<div class="col-md-3 row">
	                        			<label for="sex" class="col-sm-5 col-form-label">Giới tính <sup class="required">*</sup></label>
									    <div class="col-sm-7">
									    	<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadio1" value="option1">
											  <label class="form-check-label" for="inlineRadio1">Nam</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
											  <label class="form-check-label" for="inlineRadio2">Nữ</label>
											</div>
									    </div>
	                        		</div>
								</div>
								<div class="row mb-3">
								    <div class="col-md-5 row">
	                        			<label for="phone" class="col-sm-4 col-form-label">Số điện thoại: <sup class="required">*</sup></label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control" autocomplete="off" id="phone">
									    </div>
	                        		</div>
	                        		<div class="col-md-4 row">
	                        			<label for="email" class="col-sm-4 col-form-label">Email <sup class="required">*</sup></label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control" autocomplete="off"  id="email">
									    </div>
	                        		</div>
	                        		<div class="col-md-3 row">
	                        			<label for="blood-group" class="col-sm-6 col-form-label">Nhóm máu <sup class="required">*</sup></label>
									    <div class="col-sm-6">
									    	<select class="form-select" aria-label="Default select example">
									      		<option value="3">O</option>
												<option selected>A</option>
												<option value="1">B</option>
												<option value="2">AB</option>
											</select>
									    </div>
	                        		</div>
								</div>
								<div class="row mb-3">
								    <div class="col-md-12 row">
	                        			<label for="address" class="col-sm-1 col-form-label">Địa chỉ: <sup class="required">*</sup></label>
									    <div class="col-sm-11" style="padding: 0 55px 0 70px">
									      <input type="text" class="form-control" autocomplete="off" id="address">
									    </div>
	                        		</div>
								</div>
								<div class="row mb-3">
								    <div class="col-md-12 row">
	                        			<label for="name" class="col-sm-1 col-form-label">Bệnh lí kèm theo:</label>
									    <div class="col-sm-11" style="padding: 0 55px 0 70px">
									      <textarea name="" rows="5" class="form-control" ></textarea>
									    </div>
	                        		</div>
								</div>
								<div class="row mb-3">
								    <div class="col-md-12 row">
	                        			<label for="name" class="col-sm-1 col-form-label">Lưu ý đặc biệt:</label>
									    <div class="col-sm-11" style="padding: 0 55px 0 70px">
									      <textarea name="" rows="5" class="form-control" ></textarea>
									    </div>
	                        		</div>
								</div>
							</form>
							<div style="margin-left: 6rem; margin-bottom: 5rem;">
								<p class="header-title d-flex justify-content-center"><strong class="highlight">HỒ SƠ THANH TOÁN BẢO HIỂM</strong></p>
								<div class="row mb-3">
									<div class="col-md-6">
										<div class="d-flex justify-content-end"><a class="btn btn-outline-primary" href="#"> TẬP TIN HOÁ ĐƠN ĐỎ </a></div>
									</div>
									<div class="col-md-6">
										<div class="d-flex justify-content-start"><a class="btn btn-outline-primary" href="#"> TẬP TIN HỒ SƠ ĐIỀU TRỊ </a></div>
									</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include('footer.php') ?>