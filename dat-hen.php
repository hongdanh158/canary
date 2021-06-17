<?php include('header.php') ?>
	<section class="block block-appointment  background-light-primary">
		<div class="container">
			<div class="d-flex justify-content-center">
				<h2 class="block-title">ĐẶT HẸN</h2>
			</div>
			<div class="block-content container">
				<div class="appointment-content">
	                <div class="nav nav-pills nav-fill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	                    <a class="nav-link active" id="v-pills-user-tab" data-bs-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="true">ĐẶT LỊCH HẸN</a>
	                    <a class="nav-link" id="v-pills-pooblastila-tab" data-bs-toggle="pill" href="#v-pills-pooblastila" role="tab" aria-controls="v-pills-pooblastila" aria-selected="false">ĐẶT TƯ VẤN</a>
	                </div>
	                <div class="tab-content flex-grow-1" id="v-pills-tabContent">
	                    <div class="tab-pane fade show active " id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
	                        <form>
	                        	<div class="row mb-3">
								    <label for="name" class="col-sm-2 col-form-label">Họ và Tên <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="name">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="phone" class="col-sm-2 col-form-label">Số điện thoại <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <input type="number" class="form-control" id="phone">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="email" class="col-sm-2 col-form-label">Email <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <input type="email" class="form-control" id="email">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="appointment" class="col-sm-2 col-form-label">Lịch đặt <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control datetimepicker" id="appointment" placeholder="DD-MM-YYYY HH:II">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="contner-appointment" class="col-sm-2 col-form-label">Nội dung <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <textarea class="form-control" id="contner-appointment" placeholder="Nhập nội dung khám"></textarea>
								    </div>
								</div>
							  	<div class="d-flex justify-content-center"><a class="btn btn-outline-primary" href="#"> Xác nhận </a></div>
							</form>
	                    </div>
	                    <div class="tab-pane fade" id="v-pills-pooblastila" role="tabpanel" aria-labelledby="v-pills-pooblastila-tab">
	                    	<form>
	                        	<div class="row mb-3">
								    <label for="name-2" class="col-sm-2 col-form-label">Họ và Tên <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="name-2">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="phone-2" class="col-sm-2 col-form-label">Số điện thoại <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <input type="number" class="form-control" id="phone-2">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="email-2" class="col-sm-2 col-form-label">Email <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <input type="email" class="form-control" id="email-2">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="appointmen-2t" class="col-sm-2 col-form-label">Lịch đặt <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control datetimepicker" id="appointment-2" placeholder="DD-MM-YYYY HH:II">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="contner-appointment-2" class="col-sm-2 col-form-label">Nội dung <sup class="required">*</sup></label>
								    <div class="col-sm-10">
								      <textarea class="form-control" id="contner-appointment-2" placeholder="Nhập nội dung khám"></textarea>
								    </div>
								</div>
							  	<div class="d-flex justify-content-center"><a class="btn btn-outline-primary" href="#"> Xác nhận </a></div>
							</form>
	                    </div>
	                </div>
	            </div>
			</div>
		</div>
	</section>
<?php include('footer.php') ?>