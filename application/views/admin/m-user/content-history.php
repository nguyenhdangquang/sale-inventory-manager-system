<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Statistic
        <small>History</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Statistic</a></li>
        <li class="active">by revenue</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lịch sữ đặt vé</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Tên Rạp</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Ghế</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tổng tiền</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Giờ</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ngày</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tên Phim</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Trạng thái</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tên nhân viên</th> <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tính năng</th> 
                </tr>
                </thead>
                <tbody>
                <?php $sum=0; ?>
                <?php foreach ($listAllDHbyID as $key => $value): ?>
                  <?php $sum+=$value['GiaVe']; ?>
                  <tr role="row" class="odd">
                    
                    <td><?php echo $value['MaRapPhim']; ?></td>
                    <td><?php echo $value['ChoNgoi']; ?></td>
                    <td>$<?php echo $value['GiaVe']; ?></td>
                    <td><?php echo $value['LoaiGio']; ?></td>
                    <td><?php echo $value['LoaiNgay']; ?></td>
                    <td><?php echo $value['TenPhim']; ?></td>
                    <td><?php echo $value['TrangThai']; ?></td>
                    <td><?php echo $value['HoVaTen']; ?></td>
                    <td>
                      <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                      <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                      <a href="#"><i class="fa fa-envelope"></i>  </a>
                    </td>
                  </tr>
                  <?php endforeach ?>
                  <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                    <td style="color: #1F8A70; font-weight: bold;">TỔNG DOANH THU:</td>
                    <td class="price">$<?php echo $sum; ?></td>  
                  </tr>
                </tbody>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>