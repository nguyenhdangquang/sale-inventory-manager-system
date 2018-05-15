<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Đăng sản phẩm
        <small>Chi tiết</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Đăng</a></li>
        <li class="active">Đăng sản phẩm</li>
      </ol>
    </section>

    <!-- Main content -->
    <br><br>
    <div class="content-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-2 frm-post-film">
                    <div style="color: red !important; text-align: center;"><?php echo form_error('errorname'); ?></div>
                    <form data-toggle="validator" role="form" name="form" id="form-signUp" class="form-horizontal" enctype="multipart/form-data" method="POST" action="">
                            <br> <br>
                            <div class="col-md-12 username">
                                <div class="form-group item">
                                    <label for="tenfilm" >Tên Sản Phảm</label>
                                    <input id="tenfilm" type="text" name="tenfilm" class="form-control input-userName test" required placeholder="Nhập tên sản phẩm tại đây">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 username">
                                <div class="form-group item">
                                    <label for="tlfilm" >Loại Danh Mục</label>
                                    <input id="tlfilm" type="text" name="tlfilm" class="form-control input-userName test" required placeholder="Nhập thể loại sản phẩm tại đây">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 firstName">
                                <div class="form-group item">
                                    <label for="daodien">Giá</label>
                                    <input id="daodien" type="text" class="form-control input-firstName" name="daodien"  required placeholder="Nhập Giá tại đây">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 firstName">
                                <div class="form-group item">
                                    <label for="daodien">Số Lượng</label>
                                    <input id="daodien" type="text" class="form-control input-firstName" name="daodien"  required placeholder="Nhập Số lượng tại đây">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                             <div class="col-md-12 birth">
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
                                      <label for="nd">Mô Tả Chi Tiết</label>
                                      <textarea name="nd" id="nd" cols="100" rows="10" class="form-control input-firstName" required placeholder="Nhập Nội dung tại đây"></textarea>
                                      <div class="underline"></div>
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button-action">
                                    <button type="submit" name="add" class="submit btn btn-success btn-block">Đăng</button>
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


