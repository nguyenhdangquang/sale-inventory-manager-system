<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Statistic
        <small>by Month</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Statistic</a></li>
        <li class="active">by Month</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thống kê theo tháng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">

                <!-- CHART -->
              <?php

                  /**
                  * This example describes the single seriese chart preparation using FusionCharts PHP wrapper
                  */


                  // Including the wrapper file in the page
                  /*include("<?php echo base_url(); ?>/public/admin/dist/src/fusioncharts.php");*/
                  $this->load->view('admin/chart/fusioncharts');


                    // Preparing the object of FusionCharts with needed informations
                      /**
                      * The parameters of the constructor are as follows
                      * chartType   {String}  The type of chart that you intend to plot. e.g. Column3D, Column2D, Pie2D etc.
                      * chartId     {String}  Id for the chart, using which it will be recognized in the HTML page. Each chart on the page should have a unique Id.
                      * chartWidth  {String}  Intended width for the chart (in pixels). e.g. 400
                      * chartHeight {String}  Intended height for the chart (in pixels). e.g. 300
                      * containerId {String}  The id of the chart container. e.g. chart-1
                      * dataFormat  {String}  Type of data used to render the chart. e.g. json, jsonurl, xml, xmlurl
                      * dataSource  {String}  Actual data for the chart. e.g. {"chart":{},"data":[{"label":"Jan","value":"420000"}]}
                      */
                      ?>
                  <?php  
                       $data = array();

                      foreach ($listCTV as $key => $value) {
                        array_push($data,array("value"=>$value['SUM(GiaVe)'], "label" =>"Tháng ".$value['MONTH(LoaiNgay)']." "));
                      }
                  /*

                      for($i = 0;$i<10;$i++) {
                        array_push($data,array("value"=>200, "label" =>"Midz"));
                      }*/

                      $columnChart = new FusionCharts("column2d", "ex1" , "100%", 400, "chart-1", "json", '{
                            "chart": {
                              "caption": "Harry\'s SuperMart - Top 5 Stores\' Revenue",
                              "subCaption": "Last Quarter",
                              "numberPrefix": "$",
                              "rotatevalues": "0",
                              "plotToolText": "<div><b>$label</b><br/>Sales : <b>$$value</b></div>",
                              "theme": "fint"
                            },
                            "data": 
                            '.json_encode($data).'
                          }');

                        
                      // Render the chart
                      $columnChart->render();
                      

                  ?>
                  <div id="chart-1"><!-- Fusion Charts will render here--></div>
                  <!--END CHART -->
            </div>
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