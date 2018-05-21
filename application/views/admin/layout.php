 <!DOCTYPE html>
 <?php $data= array(); ?>
 <?php $label= array(); ?>
 <?php 
 		foreach ($listHOME as $key => $value) {
 			array_push($data, $value);
 			array_push($label, $key);
 		}
  ?>
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

		<script type="text/javascript">
				var jsStringFromPhp=<?php echo json_encode($data); ?>;
				var lblFromPhp=<?php echo json_encode($label); ?>;
      			//alert(jsStringFromPhp);
		      $(document).ready(function () {
				  'use strict';
				  var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
				  // This will get the first returned node in the jQuery collection.
				  var salesChart       = new Chart(salesChartCanvas);

				  var salesChartData = {
				    labels  : lblFromPhp,
				    datasets: [
				      {
				        label               : 'Digital Goods',
				        fillColor           : 'rgba(60,141,188,0.9)',
				        strokeColor         : 'rgba(60,141,188,0.8)',
				        pointColor          : '#3b8bba',
				        pointStrokeColor    : 'rgba(60,141,188,1)',
				        pointHighlightFill  : '#fff',
				        pointHighlightStroke: 'rgba(60,141,188,1)',
				        data                : jsStringFromPhp
				      }
				    ]
				  };

				  var salesChartOptions = {
				    // Boolean - If we should show the scale at all
				    showScale               : true,
				    // Boolean - Whether grid lines are shown across the chart
				    scaleShowGridLines      : false,
				    // String - Colour of the grid lines
				    scaleGridLineColor      : 'rgba(0,0,0,.05)',
				    // Number - Width of the grid lines
				    scaleGridLineWidth      : 1,
				    // Boolean - Whether to show horizontal lines (except X axis)
				    scaleShowHorizontalLines: true,
				    // Boolean - Whether to show vertical lines (except Y axis)
				    scaleShowVerticalLines  : true,
				    // Boolean - Whether the line is curved between points
				    bezierCurve             : true,
				    // Number - Tension of the bezier curve between points
				    bezierCurveTension      : 0.3,
				    // Boolean - Whether to show a dot for each point
				    pointDot                : false,
				    // Number - Radius of each point dot in pixels
				    pointDotRadius          : 4,
				    // Number - Pixel width of point dot stroke
				    pointDotStrokeWidth     : 1,
				    // Number - amount extra to add to the radius to cater for hit detection outside the drawn point
				    pointHitDetectionRadius : 20,
				    // Boolean - Whether to show a stroke for datasets
				    datasetStroke           : true,
				    // Number - Pixel width of dataset stroke
				    datasetStrokeWidth      : 2,
				    // Boolean - Whether to fill the dataset with a color
				    datasetFill             : true,
				    // String - A legend template
				    legendTemplate          : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<datasets.length; i++){%><li><span style=\'background-color:<%=datasets[i].lineColor%>\'></span><%=datasets[i].label%></li><%}%></ul>',
				    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
				    maintainAspectRatio     : true,
				    // Boolean - whether to make the chart responsive to window resizing
				    responsive              : true
				  };

				  // Create the line chart
				  salesChart.Line(salesChartData, salesChartOptions);
				  
				});

    </script>  
		<script src="<?php echo base_url(); ?>/public/admin/dist/js/demo.js"></script>

		

		<div class="jvectormap-label"></div>

		<div class="jvectormap-label"></div>

		<div class="jvectormap-label"></div>


	</div>
</body>
</html>