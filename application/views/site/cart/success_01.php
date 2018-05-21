<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-push-3">
				<div class="card">
				  	<img class="card-img-top" src="<?php echo base_url(); ?>upload/assets/images/imgUser/viet.jpg" alt="Card image cap">
				  	<div class="card-body">
				    		<h5 class="card-title">Thông báo</h5>
				    		<p class="card-text">Chúc mừng bạn đã đặt hàng hành công, hãy đến cửa hàng của chúng tôi để xác nhận mua hàng</p>
				    		<b>Sản phẩm : </b>
				    		<?php $amount = 0; ?>
				    		<?php foreach ($successsss as $key => $value): ?>
				    			<span><?php echo $value['sku'] ?> -  Số lượng : </span> <span> <?php $value['qty'] ?></span> <span> - Giá : <?php echo $value['rate'] ?></span>
				    			<?php $amount += $value['price']; ?>
				    		<?php endforeach ?>
				    		<br>
				    		<b>Tổng tiền : <?php echo $amount; ?></b>
				    		<a href="<?php echo base_url('site/Home') ?>" class="btn btn-primary">Quay lại trang mua hàng</a>
				  	</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br> <br> <br>