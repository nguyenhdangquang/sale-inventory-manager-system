<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create account for Employee
        <small>Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Manage</a></li>
        <li><a href="#">Manage Employee</a></li>
        <li class="active">Create account for Employee</li>
      </ol>
    </section>

    <!-- Main content -->
    <br><br>
    <div class="content-main">
    	<div class="container">
    		<div class="row">
				<div class="col-sm-4 col-sm-push-4 memployee">
					<form data-toggle="validator" role="form" name="form" id="form-signUp" class="form-horizontal" 	     enctype="multipart/form-data" method="POST" action="<?php echo base_url('admin/MEmployee/createEmp') ?>">
										<br> <br>
										<div class="col-md-12 hoten">
			                                <div class="form-group item">
			                                    <label for="hovaten">Họ và tên :</label>
			                                    <input data-toggle="tooltip" title="Mời bạn nhập họ tên" id="hovaten" type="text" class="form-control input-hoten" name="hoten"  required placeholder="Nhập Họ tên bạn tại đây">
			                                    <div class="underline"></div>
			                                    <div class="help-block with-errors"></div>
			                                </div>
			                            </div>
			                             <div class="col-md-12 email">
			                                <div class="form-group item">
			                                    <label for="mail">Email :</label>
			                                    <input data-toggle="tooltip" title="Mời bạn nhập email" id="mail" type="Email" class="form-control input-email" name="email"  required placeholder="Nhập mail bạn theo định dạng abc@gmail.com">
			                                    <div class="underline"></div>
			                                    <div class="help-block with-errors"></div>
			                                </div>
			                            </div>
			                            <div class="col-md-12 password">
			                                <div class="form-group item">
			                                    <label for="pass">Mật khẩu</label>
			                                    <input data-toggle="tooltip" title="Mời bạn nhập tên mật khẩu" type="password" name="password" class="form-control input-pass" id="pass" data-minlength="6" required data-error="Mật khẩu phải ít nhất 6 kí tự" placeholder="Nhập mật khẩu tại đây">
			                                    <div class="underline"></div>
			                                    <div class="help-block with-errors"></div>
			                                </div>
			                            </div>
			                            <div class="col-md-12 confirmPass">
			                                <div class="form-group item">
			                                    <label for="confirmPass">Nhập lại mật khẩu</label>
			                                    <input data-toggle="tooltip" title="Mời bạn nhập lại mật khẩu" id="confirmPass" type="password" class="form-control input-confirmPass" data-match="#pass" data-minlength="6" required data-match-error="Mật khẩu không trùng khớp" placeholder="Nhập lại mật khẩu tại đây">
			                                    <div class="underline"></div>
			                                    <div class="help-block with-errors"></div>
			                                </div>
			                            </div>
			                            <div class="col-md-12 gioitinh">
			                                <div class="form-group item">
			                                  <label for="gt">Giới tính : </label>
			                                  <select class="form-control" id="gt" name="gt">
			                                    <option>Nam</option>
			                                    <option>Nữ</option>
			                                  </select>
			                                </div>
			                            </div>
										<div class="col-md-12 birth">
			                                <div class="form-group item">
			                                    <label for="datepicker">Năm sinh : <span><i class="fa fa-calendar"></i></span></label>
			                                    <!-- <input type='text' class="form-control" id='namsinh' name="namsinh" /> -->
			                                    <input data-toggle="tooltip" title="Mời bạn chọn năm sinh" class="form-control input-date" type="text" id="datepicker" name="namsinh" required pattern=".{10,10}" required data-error="Bạn nhập sai định dạng ngày tháng năm sinh" placeholder="01/01/2001"/>
			                                    <div class="underline"></div>
			                                    <div class="help-block with-errors"></div>
			                                    
			                                </div>
			                            </div>
										<div class="col-md-12 phone">
			                                <div class="form-group item">
			                                    <label for="phone">Phone :</label>
			                                    <input data-toggle="tooltip" title="Mời bạn nhập số điện thoại" id="phone" type="text" class="form-control input-phone" name="phone"  required placeholder="Nhập SĐT bạn tại đây">
			                                    <div class="underline"></div>
			                                    <div class="help-block with-errors"></div>
			                                </div>
			                            </div>
			                            <div class="col-md-12 cmnd">
			                                <div class="form-group item">
			                                    <label for="cmnd">CMND :</label>
			                                    <input data-toggle="tooltip" title="Mời bạn nhập số CMND" id="cmnd" type="text" class="form-control input-cmnd" name="cmnd"  required placeholder="Nhập CMND bạn tại đây">
			                                    <div class="underline"></div>
			                                    <div class="help-block with-errors"></div>
			                                </div>
			                            </div>
										<button class="btn btn-info btn-block" ><span class="glyphicon glyphicon-edit"></span>Tạo</button>
								  </form>
								  <br><br><br>
				</div>
    		</div>
    	</div>
    </div>
    <!-- /.content -->
</div>
