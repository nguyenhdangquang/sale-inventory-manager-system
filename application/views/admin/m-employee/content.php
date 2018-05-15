<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Manage
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Manage</a></li>
        <li class="active">Employee Manage</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách nhân viên</h3>
            </div>
            <!-- /.box-header -->
            <div class="text-right">
                  <a href="<?php echo base_url('admin/MEmployee/addEmp') ?>" class="btn btn-info">Tạo tài khoản cho nhân viên</a>
            </div>
            <br>
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Họ và tên</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Ngày sinh </th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Giới tính</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CMND </th> <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Phone</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tính năng</th> 
                
                </tr>
                </thead>
                <tbody>
              <?php foreach ($ListEmployees as $key => $value): ?>
                <tr role="row" class="odd">
                  <td class="sorting_1"> <?php echo $value['HoVaTen']; ?> </td>
                  <td> <?php echo $value['Email']; ?> </td>
                  <td> <?php echo $value['NgaySinh']; ?> </td>
                  <td> <?php echo $value['GioiTinh']; ?> </td>
                  <td> <?php echo $value['CMND']; ?> </td>
                  <td> <?php echo $value['Phone']; ?> </td>
                  <td>
                    <a href="<?php echo base_url('admin/MEmployee/editEmp') ?>/<?php echo $value['IdNhanVien']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url('admin/MEmployee/DelEmp') ?>/<?php echo $value['IdNhanVien']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url('admin/MEmployee/detailEmp') ?>/<?php echo $value['IdNhanVien']; ?>"><i class="fa fa-address-card-o"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
                </tbody>

              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
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