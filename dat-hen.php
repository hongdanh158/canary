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
								    <label for="name" class="col-sm-3 col-form-label">Họ và Tên <sup class="required">*</sup></label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Nguyễn Văn A">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="phone" class="col-sm-3 col-form-label">Số điện thoại <sup class="required">*</sup></label>
								    <div class="col-sm-9">
								      <input type="number" class="form-control" id="phone" autocomplete="off"  placeholder="0123456789">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="email" class="col-sm-3 col-form-label">Email <sup class="required">*</sup></label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control" id="email" autocomplete="off" placeholder="example@gmail.com">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="appointment" class="col-sm-3 col-form-label">Lịch đặt <sup class="required">*</sup></label>
								    <div class="col-sm-9 group-datetime">
								      <span>Ngày</span> <input type="text" autocomplete="off" placeholder="DD" class="form-control"> 
								      <span>/</span> 
								      <input type="text" autocomplete="off" placeholder="MM" class="form-control">
								      <span>/</span> 
								      <input type="text" autocomplete="off" placeholder="YYYY" class="form-control">
								      <span>Vào lúc</span>
								      <input type="text" autocomplete="off" placeholder="00" class="form-control">
								      <span>:</span> 
								      <input type="text" autocomplete="off" placeholder="00" class="form-control">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="contner-appointment" class="col-sm-3 col-form-label">Nội dung <sup class="required">*</sup></label>
								    <div class="col-sm-9">
								      <textarea class="form-control" id="contner-appointment" placeholder="Nhập nội dung khám"></textarea>
								    </div>
								</div>
							  	<div class="d-flex justify-content-end"><a class="btn btn-outline-primary" href="#"> Xác nhận </a></div>
							</form>
	                    </div>
	                    <div class="tab-pane fade" id="v-pills-pooblastila" role="tabpanel" aria-labelledby="v-pills-pooblastila-tab">
	                    	<form>
	                        	<div class="row mb-3">
								    <label for="name" class="col-sm-3 col-form-label">Họ và Tên <sup class="required">*</sup></label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Nguyễn Văn A">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="phone" class="col-sm-3 col-form-label">Số điện thoại <sup class="required">*</sup></label>
								    <div class="col-sm-9">
								      <input type="number" class="form-control" id="phone" autocomplete="off"  placeholder="0123456789">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="email" class="col-sm-3 col-form-label">Email <sup class="required">*</sup></label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control" id="email" autocomplete="off" placeholder="example@gmail.com">
								    </div>
								</div>
								<div class="row mb-3">
								    <label for="contner-appointment" class="col-sm-3 col-form-label">Câu hỏi <sup class="required">*</sup></label>
								    <div class="col-sm-9">
								      <textarea class="form-control" id="contner-appointment" placeholder="Văn bản" style="height: 112px;"></textarea>
								    </div>
								</div>
							  	<div class="d-flex justify-content-end"><a class="btn btn-outline-primary" href="#"> Xác nhận </a></div>
							</form>
	                    </div>
	                </div>
	            </div>
			</div>
		</div>
	</section>
<?php include('footer.php') ?>