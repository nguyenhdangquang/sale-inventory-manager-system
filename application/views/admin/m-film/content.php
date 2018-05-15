<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Đăng Phim</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
        <li><a href="#">Quản lý</a></li>
        <li class="active">Đăng phim</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Quản lý những bộ phim vừa đăng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Tên Phim</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Thể Loại</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Đạo diễn</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Diễn Viên(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Ngôn Ngữ</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Thời lượng</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Ngày khởi chiếu</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Ngày kết thúc</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Phân Loại</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Sao</th></tr>
                </thead>
                <tbody>
                <?php foreach ($listAllFilm as $key => $value): ?>
                  <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo $value['TenPhim'] ?></td>
                    <td><?php echo $value['TheLoaiPhim'] ?></td>
                    <td><?php echo $value['DaoDien'] ?></td>
                    <td><?php echo $value['DienVien'] ?></td>
                    <td><?php echo $value['NgonNgu'] ?></td>
                    <td><?php echo $value['ThoiLuong'] ?></td>
                    <td><?php echo $value['NgayKhoiChieu'] ?></td>
                    <td><?php echo $value['NgayKetThuc'] ?></td>
                    <td><?php echo $value['PhanLoai'] ?></td>
                    <td><?php echo $value['Sao'] ?></td>
                  </tr>
                <?php endforeach ?>
                </tbody>
              </table>
              </div></div>
              <div class="row text-center">
                <div class="col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                  <?php echo $this->pagination->create_links(); ?>
                </div>
              </div>
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