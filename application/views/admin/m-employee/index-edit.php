 <!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('admin/head'); ?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
         $(function() {
		    $("#datepicker").datepicker();
		});

  	</script>
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
		<?php $this->load->view('admin/m-employee/content-edit'); ?>
		<!-- content -->

		<!-- footer -->
		<?php $this->load->view('admin/footer'); ?>
		<!-- footer -->

		<!-- Control sidebar -->

		<!-- Control sidebar -->
		<div class="control-sidebar-bg"></div>



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
		<script src="<?php echo base_url(); ?>public/site/cssLogin/validator.min.js"></script>
	</div>
</body>
</html>