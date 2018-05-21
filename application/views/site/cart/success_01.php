<section id="printableArea">
	<div class="container jumbotron" style="border-radius:15px;background:#FFF;border:#666 solid 1px; padding:95px;padding-top:10px; ">
                <div class="row text-center font" style="color:#000;margin:30px; font-size:30px">HÓA ĐƠN THANH TOÁN KHÁCH HÀNG</div>
                <div class="row text-right">Ngày Đăng Đặt Hàng: &nbsp <?php echo date('Y-m-d') ?> <?php echo date('h:i a') ?></div>
                <tr>Họ Và Tên: &nbsp <?php echo $username; ?> </tr>
                <br>
                <tr>Số Điện Thoại: &nbsp <?php echo $phone; ?></tr>
                <br>
                <tr>Địa Chỉ: &nbsp</tr>
                <br>
                <table frame="below" rules="group" ; class="table table-striped default" style="border-collapse:collapse; border:#999 solid 1px;">
                        <caption style="font-size:20px;">
                                Thực Đơn Của Bạn
                        </caption>
                        <thead>
                                <tr style="background:#3498db">
                                        <th>Tên Sản Phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền </th>
                                </tr>
                        </thead>
                        <tbody>
                        	<?php $amount = 0; ?>
                        	<?php foreach ($successsss as $value): ?>
                                <tr>
                                        <td>
                                               <?php echo $value['sku'] ?> 
                                        </td>
                                        <td>
                                                <?php echo $value['rate'] ?>
                                        </td>
                                        <td>
                                               <?php echo $value['qty'] ?>
                                        </td>
                                        <td>
                                        	<?php echo $value['amount'] ?>
                                        </td>
                                </tr>
                                <?php $amount += $value['amount']; ?>
                                <?php endforeach ?>
                        </tbody>
                </table>
                <h4>Tổng Số Tiền(Đã bao gồm 10% VAT): &nbsp <b> <?php echo $amount; ?>  </b>&nbsp&nbsp VND </h4>
                <br>
                <br>
                <div class="col-xs-6 text-center">Người Nhận</div>
                <div class="col-xs-6 text-center">Giao Hàng</div>
        </div>
        <hr>
        <div class="text-center">(*) In Hóa Đơn Thanh Toán.
                <input type="button" class="btn btn-danger text-right" id="print_button"   value="Print" onclick="this.style.display = 'none'; printDiv('printableArea')" />
        </div>
</section>
<br> <br> <br>