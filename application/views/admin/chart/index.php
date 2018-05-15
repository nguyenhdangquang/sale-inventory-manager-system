
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/admin/dist/css/extension-page-style.css">

<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>

<?php $this->load->view('admin/head'); ?>
<style>

.code-block-holder pre {
      max-height: 188px;  
      min-height: 188px; 
      overflow: auto;
      border: 1px solid #ccc;
      border-radius: 5px;
}


.tab-btn-holder {
	width: 100%;
	margin: 20px 0 0;
	border-bottom: 1px solid #dfe3e4;
	min-height: 30px;
}

.tab-btn-holder a {
	background-color: #fff;
	font-size: 14px;
	text-transform: uppercase;
	color: #006bb8;
	text-decoration: none;
	display: inline-block;
	*zoom:1; *display:inline;


}

.tab-btn-holder a.active {
	color: #858585;
    padding: 9px 10px 8px;
    border: 1px solid #dfe3e4;
    border-bottom: 1px solid #fff;
    margin-bottom: -1px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    position: relative;
    z-index: 300;
}

</style>

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
    <?php $this->load->view($temp,$this->data); ?>
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

    <script src="<?php echo base_url(); ?>/public/admin/bower_components/chart.js/Chart.js"></script>

    <script src="<?php echo base_url(); ?>/public/admin/dist/js/pages/dashboard2.js"></script>

    <script src="<?php echo base_url(); ?>/public/admin/dist/js/demo.js"></script>

    <div class="jvectormap-label"></div>

    <div class="jvectormap-label"></div>

    <div class="jvectormap-label"></div>
  </div>
</body>
</html>