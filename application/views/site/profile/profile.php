<section id="section-profile">
        <div class="bs-example">
                <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#sectionA">Profile</a></li>
                        <li><a data-toggle="tab" href="#sectionB">Đơn hàng</a></li>
                        <li><a data-toggle="tab" href="#sectionC">Lịch sử đơn đã đặt</a></li>
                </ul>
                <div class="tab-content">
                        <div id="sectionA" class="tab-pane fade in active">
                                <div id="about" class="container">
                                        <h2 class="heading-title"><span class="glyphicon glyphicon-user icon-heading"></span>Profile</h2>
                                        <div class="row">
                                                <form data-toggle="validator" role="form" name="form" id="form-signUp" class="form-horizontal" enctype="multipart/form-data" method="POST" action="#">
                                                        <div class="col-sm-4 text-center box-profile">
                                                                <div class="thumbnail img-profile">
                                                                        <img src="<?php echo base_url(); ?>upload/assets/images/imgUser/viet.jpg" alt="My avatar">
                                                                </div>
                                                                <input value="gg" type="file" class="btn btn-default" name="avatar" />
                                                        </div>
                                                        <div class="col-sm-5 col-sm-push-2 info-profile">
                                                                <h3 class="text-center">Information Update</h3>
                                                                <br>
                                                                <div class="col-md-12 hoten">
                                                                        <div class="form-group item">
                                                                                <label for="hovaten">Họ và tên :</label>
                                                                                <input value="Le" id="hovaten" type="text" class="form-control input-hoten" name="hoten" required placeholder="Nhập Họ tên bạn tại đây">
                                                                                <div class="underline"></div>
                                                                                <div class="help-block with-errors"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-12 hoten">
                                                                        <div class="form-group item">
                                                                                <label for="hovaten">Họ và tên :</label>
                                                                                <input value="Le" id="hovaten" type="text" class="form-control input-hoten" name="hoten" required placeholder="Nhập Họ tên bạn tại đây">
                                                                                <div class="underline"></div>
                                                                                <div class="help-block with-errors"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-12 hoten">
                                                                        <div class="form-group item">
                                                                                <label for="hovaten">Họ và tên :</label>
                                                                                <input value="Le" id="hovaten" type="text" class="form-control input-hoten" name="hoten" required placeholder="Nhập Họ tên bạn tại đây">
                                                                                <div class="underline"></div>
                                                                                <div class="help-block with-errors"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-12 hoten">
                                                                        <div class="form-group item">
                                                                                <label for="hovaten">Họ và tên :</label>
                                                                                <input value="Le" id="hovaten" type="text" class="form-control input-hoten" name="hoten" required placeholder="Nhập Họ tên bạn tại đây">
                                                                                <div class="underline"></div>
                                                                                <div class="help-block with-errors"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-12 gioitinh">
                                                                        <div class="form-group item">
                                                                                <label for="gt">Giới tính : </label>
                                                                                <select value="" class="form-control" id="gt" name="gt">
					                                    	<option>Nam</option>
					                                    	<option>Nữ</option>
					                                </select>
                                                                        </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span>Update</button>
                                                        </div>
                                                </form>
                                        </div>
                                </div>
                        </div>
                        <div id="sectionB" class="tab-pane fade">
                                <div class="container">
                                        <h2 class="heading-title"><span class="glyphicon glyphicon-th-list icon-heading"></span>Đơn hàng</h2>
                                        <table class="table">
                                                <thead>
                                                        <tr>
                                                                <th></th>
                                                                <th>Tên sản phẩm</th>
                                                                <th>Số lượng</th>
                                                                <th>Giá</th>
                                                                <th>Thành tiền</th>
                                                                <th>Ngày</th>
                                                                <th>Trạng thái</th>
                                                                <th>Chức năng</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <?php foreach ($listOrderYetByID as $value): ?>
                                                                <tr>
                                                                        <td><img width="50" height="50" src="<?php echo base_url(); ?>/upload/upload/product/<?php echo $value['image'] ?>" alt=""></td>
                                                                        <td> <?php echo $value['sku']; ?> </td>
                                                                        <td> <?php echo $value['qty']; ?> </td>
                                                                        <td> <?php echo $value['price']; ?> </td>
                                                                        <td> <?php echo $value['amount']; ?> </td>
                                                                        <td> <?php echo $value['date_time']; ?> </td>
                                                                        <td> Chưa xác nhận </td>
                                                                        <td>
                                                                                <a href="#" class="btn btn-danger">Hủy</a>
                                                                        </td>
                                                                </tr>
                                                        <?php endforeach ?>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                        <div id="sectionC" class="tab-pane fade">
                                <div class="container">
                                        <h2 class="heading-title"><span class="glyphicon glyphicon-th-list icon-heading"></span>Lịch sử</h2>
                                        <table class="table">
                                                <thead>
                                                        <tr>
                                                                <th></th>
                                                                <th>Tên sản phẩm</th>
                                                                <th>Số lượng</th>
                                                                <th>Giá</th>
                                                                <th>Thành tiền</th>
                                                                <th>Ngày</th>
                                                                <th>Trạng thái</th>
                                                                <th>Chức năng</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <?php foreach ($listOrderedByID as $value): ?>
                                                                <tr>
                                                                        <td><img width="50" height="50" src="<?php echo base_url(); ?>/upload/upload/product/<?php echo $value['image'] ?>" alt=""></td>
                                                                        <td> <?php echo $value['sku']; ?> </td>
                                                                        <td> <?php echo $value['qty']; ?> </td>
                                                                        <td> <?php echo $value['price']; ?> </td>
                                                                        <td> <?php echo $value['amount']; ?> </td>
                                                                        <td> <?php echo $value['date_time']; ?> </td>
                                                                        <td> Đã mua hàng </td>
                                                                        <td>
                                                                                <a href="#" class="btn btn-danger">Hủy</a>
                                                                        </td>
                                                                </tr>
                                                        <?php endforeach ?>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                </div>
        </div>
</section>