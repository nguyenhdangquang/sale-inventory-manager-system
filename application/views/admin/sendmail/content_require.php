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
        <li><a href="#">Send mail by require</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1>Gửi mail theo yêu cầu :</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                  <div class="col-sm-6 push-sm-6">
                        <div class="card">
                          <form action="<?php echo base_url('admin/SendMail') ?>/send" method="post" enctype="multidata/form-data">
                            <div class="card-block">
                              <fieldset class="form-group">
                                <label for="formGroupExampleInput">Tên người nhận</label>
                                <input name="ten" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example : Lê Anh Việt">
                              </fieldset>
                              <fieldset class="form-group">
                                <label for="formGroupExampleInput2">Email người nhận : </label>
                                <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Example : viet123@gmail.com">
                              </fieldset>
                              <fieldset class="form-group">
                                <label for="formGroupExampleInput3">Nội dung : </label>
                                <!-- <input name="noidung" type="textarea" class="form-control" id="formGroupExampleInput3"> -->
                                <textarea name="noidung" class="form-control" id="formGroupExampleInput3" cols="30" rows="10"></textarea>
                              </fieldset>
                              <input type="submit" class="btn btn-success btn-block">
                            </div>
                          </form>
                        </div>
                        
                  </div>
                </div>
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