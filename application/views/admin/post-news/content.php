<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Đăng tin tức
        <small>Đăng tin tức</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
        <li><a href="#">Đăng</a></li>
        <li class="active">Đăng tin tức</li>
      </ol>
    </section>

    <!-- Main content -->
    <br><br>
    <div class="content-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-2 frm-post-film">
                    <form data-toggle="validator" role="form" name="form" id="form-signUp" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url('Admin/PostFilm/add') ?>">
                            <br> <br>
                            <div class="col-md-12 tieude">
                                <div class="form-group item">
                                    <label for="tieude" >Tiêu đề</label>
                                    <input id="tieude" type="text" name="tieude" class="form-control input-userName test" required placeholder="Nhập tiêu đề tin tức tại đây">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 firstName">
                                <div class="form-group item">
                                    <label for="motangan">Mô tả ngắn</label>
                                    <input id="motangan" type="text" class="form-control input-firstName" name="motangan"  required placeholder="Nhập Mô tả ngắn tại đây">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 birth">
                                <div class="form-group item">
                                    <label for="datepicker">Ngày đăng : <span><i class="fa fa-calendar"></i></span></label>
                                    <!-- <input type='text' class="form-control" id='namsinh' name="namsinh" /> -->
                                    <input data-toggle="tooltip" title="Mời bạn chọn ngày đăng" class="form-control input-date" type="datepicker" id="datepicker" name="ngaydang" required pattern=".{10,10}" required data-error="Bạn nhập sai định dạng ngày tháng năm" placeholder="01/01/2001"/>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                    
                                </div>
                            </div>
                                <div class="col-md-12 firstName">
                                    <div class="form-group item">
                                        <label for="ha">Hình Ảnh :</label>
                                        <input id="ha" type="file" class="form-control input-firstName" name="ha"  required placeholder="Chọn hình ảnh">
                                        <div class="underline"></div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 firstName">
                                  <div class="form-group item">
                                      <label for="nd">Nội dung</label>
                                      <textarea name="nd" id="nd" cols="100" rows="10" class="form-control input-firstName" required placeholder="Nhập Nội dung tại đây"></textarea>
                                      <div class="underline"></div>
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <br><br>
                              <div class="col-md-12">
                                <div class="form-group button-action">
                                    <button type="submit" name="add" class="submit btn btn-success btn-block">Đăng</button>
                                </div>
                            </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </form>
                                  <br><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>


