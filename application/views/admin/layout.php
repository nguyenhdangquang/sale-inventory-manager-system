 <!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('admin/head'); ?>
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
	<div id="content" style="height: auto; min-height: 100%;">
		<!-- header -->
		<?php $this->load->view('admin/header', $this->data); ?>
		<!-- end header -->
		<!-- left side -->
		<?php $this->load->view('admin/leftside'); ?>
		<!-- left side -->
		<!-- content -->
		<?php $this->load->view($temp , $this->data); ?>
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

		<script src="<?php echo base_url(); ?>/public/admin/dist/js/demo.js"></script>

		

		<div class="jvectormap-label"></div>

		<div class="jvectormap-label"></div>

		<div class="jvectormap-label"></div>


	</div>
</body>
</html>