<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view('site/head'); ?>
	</head>
<body>
	
	<div class="wrapper">
		<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<?php $this->load->view('site/navigator'); ?>
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->		<!-- ============================================================= HEADER ============================================================= -->
<?php $this->load->view('site/header'); ?>
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Register</h2>
                    <div style="color: red !important; text-align: center;"><?php echo form_error('register'); ?></div>
                    <form data-toggle="validator" role="form" name="form" id="form-signUp" class="login-form cf-style-1" enctype="multipart/form-data" method="POST" action="">
						<div class="form-group field-row">
	                            <label for="username">Họ và tên</label>
	                            <input data-toggle="tooltip" data-placement="top" title="" id="username" name="username" class="form-control input-userName username" required="" placeholder="Enter UserName" data-error="Bạn phải nhập họ và tên" data-original-title="Enter email, please!!!" type="text">
                                <div class="underline"></div>
                                <div class="help-block with-errors"></div>
	                        </div><!-- /.field-row -->

	                        <div class="form-group field-row">
                                <label for="pass">Password</label>
                                <input data-toggle="tooltip" data-placement="top" title="" name="password" class="form-control input-pass test" id="pass" data-minlength="6" required data-error="Mật khẩu phải ít nhất 6 kí tự" placeholder="Nhập mật khẩu tại đây" type="password">
                                <div class="underline"></div>
                                <div class="help-block with-errors"></div>
                            </div><!-- /.field-row -->
                            <div class="form-group field-row">
	                            <label for="confirmPass">Password Confirm</label>
                                <input id="confirmPass" type="password" class="form-control input-confirmPass" data-match="#pass" data-minlength="6" required data-match-error="Mật khẩu không trùng khớp" placeholder="Nhập lại mật khẩu tại đây">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
	                        </div><!-- /.field-row -->

	                        <div class="form-group field-row">
	                            <label for="email">Email</label>
	                           <input id="email" type="Email" class="form-control input-email" name="email"  required placeholder="Nhập mail bạn theo định dạng abc@gmail.com">
                                <div class="underline"></div>
                                <div class="help-block with-errors"></div>
	                        </div><!-- /.field-row -->

	                        <div class="form-group field-row">
	                            <label for="fname">First Name</label>
	                            <input data-toggle="tooltip" data-placement="top" title="" id="fname" name="fname" class="form-control input-email email" required="" placeholder="Enter First Name" data-original-title="Enter First Name, please!!!" type="text">
	                               <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                            </div><!-- /.field-row -->

	                        <div class="form-group field-row">
	                            <label for="lname">Last Name</label>
	                            <input data-toggle="tooltip" data-placement="top" title="" id="lname" name="lname" class="form-control input-lname lname" required="" placeholder="Enter Last Name" data-original-title="Enter Last Name, please!!!" type="text">
	                           <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                            </div><!-- /.field-row -->

	                        <div class="form-group field-row">
	                            <label for="phone">Phone</label>
	                            <input data-toggle="tooltip" data-placement="top" title="" id="phone" name="phone" class="form-control input-phone phone" required="" placeholder="Enter Phone" data-original-title="Enter Phone, please!!!" type="text">
	                           <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                            </div><!-- /.field-row -->

	                        <div class="form-group field-row">
	                            <label for="gender">Gender</label>
	                            <select id="gender" name="gender">
	                            	<option value="1">Nam</option>
	                            	<option value="2">Nữ</option>
	                            </select>
	                        </div><!-- /.field-row -->

	                        <div class="buttons-holder">
	                            <button type="submit" class="le-button huge">Register</button>
	                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

			<div class="col-md-6">
				<section class="section register inner-left-xs">
                    <h2 class="bordered">Đăng kí tài khoản tại đây</h2>

                        <div class="buttons-holder">
                            <a class="le-button huge" href="<?php echo base_url('site/Register') ?>">Đăng ki</a>
                        </div><!-- /.buttons-holder -->

                    <h2 class="semi-bold">Đăng kí hôm nay bạn sẽ có thể :</h2>

                    <ul class="list-unstyled list-benefits">
                        <li><i class="fa fa-check primary-color"></i> Thanh toán nhanh gọn lẹ</li>
                        <li><i class="fa fa-check primary-color"></i> Theo dõi đơn hàng dễ dàng</li>
                        <li><i class="fa fa-check primary-color"></i> Lưu giữ các giao dịch của bạn</li>
                    </ul>

                </section><!-- /.register -->

			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->
 <!-- ======= FOOTER ============== -->
        <?php $this->load->view('site/footer'); ?>
        <!-- ======= FOOTER : END ============== -->
    </div>

    <!-- For demo purposes – can be removed on production -->
    <div class="config open">
        <div class="config-options">
            <h4>Pages</h4>
            <ul class="list-unstyled animate-dropdown">
                <li class="dropdown">
                    <button class="dropdown-toggle btn le-button btn-block" data-toggle="dropdown">View Pages</button>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index-2.html">Home Alt</a></li>
                        <li><a href="category-grid.html">Category - Grid/List</a></li>
                        <li><a href="category-grid-2.html">Category 2 - Grid/List</a></li>
                        <li><a href="single-product.html">Single Product</a></li>
                        <li><a href="single-product-sidebar.html">Single Product with Sidebar</a></li>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                        <li><a href="blog-post.html">Blog Post</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                        <li><a href="authentication.html">Login/Register</a></li>
                    </ul>   
                </li>
            </ul>
            <h4>Header Styles</h4>
            <ul class="list-unstyled">
                <li><a href="index.html1">Header 1</a></li>
                <li><a href="index.html">Header 2</a></li>
            </ul>
            <h4>Colors</h4>
            <ul class="list-unstyled">
                <li><a class="changecolor green-text" href="#" title="Green color">Green</a></li>
                <li><a class="changecolor blue-text" href="#" title="Blue color">Blue</a></li>
                <li><a class="changecolor red-text" href="#" title="Red color">Red</a></li>
                <li><a class="changecolor orange-text" href="#" title="Orange color">Orange</a></li>
                <li><a class="changecolor navy-text" href="#" title="Navy color">Navy</a></li>
                <li><a class="changecolor dark-green-text" href="#" title="Darkgreen color">Dark Green</a></li>
            </ul>
        </div>
        <a class="show-theme-options" href="#"><i class="fa fa-wrench"></i></a>
    </div>
    <!-- For demo purposes – can be removed on production : End -->

    
    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/gmap3.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/css_browser_selector.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/echo.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery.raty.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>public/site/cssLogin/validator.min.js"></script>

    <!-- For demo purposes – can be removed on production -->
    
    <script src="<?php echo base_url(); ?>/upload/switchstylesheet/switchstylesheet.js"></script>
    
    <script>
        $(document).ready(function(){ 
            $(".changecolor").switchstylesheet( { seperator:"color"} );
            $('.show-theme-options').click(function(){
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
        });
    </script>
    <!-- For demo purposes – can be removed on production : End -->

    <script src="http://w.sharethis.com/button/buttons.js"></script>

</body>
</html>