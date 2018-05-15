 <!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('admin/head'); ?>
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
	<div id="content" style="height: auto; min-height: 100%;">
		<!-- header -->
		<?php $this->load->view('admin/header'); ?>
		<!-- end header -->
		<!-- left side -->
		<?php $this->load->view('admin/leftside'); ?>
		<!-- left side -->

		<!-- content -->
		<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        404 Error Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">404 error</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Bạn k đủ quyền để truy cập vào trang này.</h3>

          <p>
           	Chúng tôi không thể tin thấy trang này cho bạn.
            Bạn có thể click vào đây <a href="<?php echo base_url('admin/Home') ?>">Trang Chủ</a> để về Trang Chủ
          </p>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
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