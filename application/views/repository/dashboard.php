

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php if($is_admin == true): ?>

        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $total_products ?></h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('repository/products/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $total_paid_orders ?></h3>

                <p>Total Paid Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url('repository/orders/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $total_users; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="<?php echo base_url('repository/users/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $total_stores ?></h3>

                <p>Total Stores</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-home"></i>
              </div>
              <a href="<?php echo base_url('repository/stores/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      <?php endif; ?>
      

    <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Báo cáo tóm tắt hàng tháng</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button disabled type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-wrench"></i></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Biểu đồ biểu diễn doanh trong năm</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" style="height: 183px; width: 703px;" width="703" height="183"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Mục tiêu hoàn thành trong ngày</strong>
                    </p>
                    <div class="progress-group">
                      <span class="progress-text">temp</span>

                      <span class="progress-number"><b>1254</b>/10000</span>
                          <div class="progress sm">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%"></div>
                          </div>
                    </div>
                    <!-- /.progress-group progress-bar-aqua-red-green-yellow  -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-sm-3 col-xs-6">
                    <div class="description-block border-right">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i>10%</span>
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>15%</span>
                      <h5 class="description-header">10000$</h5>
                      <span class="description-text">So với tháng trước</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-xs-6">
                    <div class="description-block border-right">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i>20%</span>
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>25%</span>
                      <h5 class="description-header">20000$</h5>
                      <span class="description-text">So với 2 tháng trước</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-xs-6">
                    <div class="description-block border-right">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i>45%</span>
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>50%</span>
                      <h5 class="description-header">55555$</h5>
                      <span class="description-text">So với 3 tháng trước</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-xs-6">
                    <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i>60%</span>
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>70%</span>
                      <h5 class="description-header">80$</h5>
                      <span class="description-text">So với 4 tháng trước</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="<?php echo base_url(); ?>/public/admin/bower_components/Chart.js/Chart.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    }); 
</script>
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
