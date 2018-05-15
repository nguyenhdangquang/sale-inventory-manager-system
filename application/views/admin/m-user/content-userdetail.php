<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Information
        <small>Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Manage</a></li>
        <li><a href="#">Manage Customer</a></li>
        <li class="active">Detail Information</li>
      </ol>
    </section>

    <!-- Main content -->
    <br><br>
    <div class="content-main">
    	<div class="container">
    		<div class="row">
    		<?php foreach ($ListUserDetail as $key => $value): ?>
    			<div class="col-sm-5">
    				<div class="card">
					  <img class="card-img-top" src="<?php echo base_url(); ?>upload/imgUser/<?php echo $value['hinh'] ?>" alt="Card image cap">
					</div>
    			</div>
    			<div class="col-sm-6">
    				<div class="card">
					  <div class="card-body">
					    <h1 class="card-title"><?php echo $value['TenKH'] ?></h1>
					    <h3>Ngày sinh : <?php echo $value['NgaySinh'] ?></h3>
					    <h3>Giới tính : <?php echo $value['GioiTinh'] ?></h3>
					    <h3>CMND : <?php echo $value['CMND'] ?></h3>
					    <h3>Phone : <?php echo $value['Phone'] ?></h3>
					    <h3>Địa chỉ : <?php echo $value['DiaChi'] ?></h3>
					    <h3>Loại thẻ : <?php echo $value['LoaiThe'] ?></h3>
					    <p class="card-text">
					      Some quick example text to build on the card title
					      and make up the bulk of the card's content.
					    </p>
					    <a href="<?php echo base_url('admin/MUser') ?>" class="btn btn-primary">Go back</a>
					  </div>
					</div>
    			</div>
    		</div>
    		<?php endforeach ?>
    	</div>
    </div>
    <!-- /.content -->
  </div>