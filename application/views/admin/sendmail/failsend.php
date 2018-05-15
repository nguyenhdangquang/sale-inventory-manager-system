 <!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('admin/head'); ?>
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
	<div style="height: auto; min-height: 100%;">
		<!-- header -->
		<?php $this->load->view('admin/header'); ?>
		<!-- end header -->
		<!-- left side -->
		<?php $this->load->view('admin/leftside'); ?>
		<!-- left side -->
		<!-- content -->
		<div class="content-wrapper" style="min-height: 359px;">
		    <!-- Content Header (Page header) -->
		    <section class="content-header">
		      <h1>
		        Thông báo lỗi
		        <small>Mail</small>
		      </h1>
		      <ol class="breadcrumb">
		        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li><a href="#">MailBox</a></li>
		        <li><a href="#">gửi mail</a></li>
		        <li><a href="#">Thông báo</a></li>
		      </ol>
		    </section>

		    <!-- Main content -->
		    <section class="content">
		      <div class="row">
		        <div class="col-xs-12">
		          <div class="box">
		            <div class="box-header">
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <div class="row text-center">
		                  <div class="col-sm-12">
		                        <h1>Bạn đã gửi thất bại hãy thử lại</h1>
		                  </div>
		                </div>
		            </div>
		                  <a href="<?php echo base_url('admin/Sendmail') ?>" class="btn btn-info">Quay lại trang gửi mail</a>
		                  <br> <br>

		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->

		          
		          <!-- /.box -->
		        </div>
		        <!-- /.col -->
		      </div>
		      <!-- /.row -->
		    </section>
		    <!-- /.content -->
		  </div>
		<!-- content -->

		<!-- footer -->
		<?php $this->load->view('admin/footer'); ?>
		<!-- footer -->

		<!-- Control sidebar -->

		<!-- Control sidebar -->
		<div class="control-sidebar-bg"></div>


		<script src="<?php echo base_url(); ?>/public/admin/bower_components/jquery/dist/jquery.min.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/bower_components/fastclick/lib/fastclick.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/dist/js/adminlte.min.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/bower_components/Chart.js/Chart.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/dist/js/pages/dashboard2.js"></script>

		<script src="<?php echo base_url(); ?>/public/admin/dist/js/demo.js"></script>

		<div class="jvectormap-label"></div>

		<div class="jvectormap-label"></div>

		<div class="jvectormap-label"></div>
	</div>
</body>
</html>