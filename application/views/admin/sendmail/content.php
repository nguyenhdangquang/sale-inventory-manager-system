<div class="content-wrapper" style="min-height: 359px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gửi mail sự kiện đến khách hàng
        <small>Mail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">MailBox</a></li>
        <li><a href="#">Send mail</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lựa chọn hình thức gửi :</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <a href="<?php echo base_url('admin/sendmail/Send_require') ?>" class="btn btn-success">Gửi mail theo yêu cầu</a>
              <a href="<?php echo base_url('admin/SendMail_Birthday') ?>" class="btn btn-info">Gửi mail chúc mừng sinh nhật</a>
              <a href="<?php echo base_url('admin/SendMail_NewFilm') ?>" class="btn btn-danger">Gửi mail giới thiệu film mới</a>
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