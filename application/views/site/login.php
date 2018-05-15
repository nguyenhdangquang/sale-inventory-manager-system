<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view('site/head'); ?>
	</head>
<body>
	
	<div class="wrapper">
		<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-colors">Change Colors</a>

                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" class="changecolor green-text" tabindex="-1" href="#" title="Green color">Green</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor blue-text" tabindex="-1" href="#" title="Blue color">Blue</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor red-text" tabindex="-1" href="#" title="Red color">Red</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor orange-text" tabindex="-1" href="#" title="Orange color">Orange</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor navy-text" tabindex="-1" href="#" title="Navy color">Navy</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor dark-green-text" tabindex="-1" href="#" title="Darkgreen color">Dark Green</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#pages">Pages</a>
                    <ul class="dropdown-menu" role="menu">
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
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-language">English</a>
                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turkish</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tamil</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">French</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Russian</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-currency">Dollar (US)</a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Euro (EU)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turkish Lira (TL)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indian Rupee (INR)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Dollar (US)</a></li>
                    </ul>
                </li>
                 <li><a href="<?php echo base_url('site/Register') ?>">Register</a></li>
                <li><a href="<?php echo base_url('site/Login') ?>">Login</a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->		<!-- ============================================================= HEADER ============================================================= -->
<?php $this->load->view('site/header'); ?>
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Sign In</h2>
					<p>Hello, Welcome to your account</p>

					<div class="social-auth-buttons">
						<div class="row">
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Sign In with Facebook</button>
							</div>
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</button>
							</div>
						</div>
					</div>

					<form data-toggle="validator" role="form" name="form" id="form-signUp" enctype="multipart/form-data" method="POST" action="" novalidate="true" class="login-form cf-style-1">
						<div class="field-row">
			                            <label for="email">Email</label>
			                            <input data-toggle="tooltip" data-placement="top" title="" id="email" name="username" class="form-control input-userName test" required="" placeholder="Enter Email" data-original-title="Enter email, please!!!" type="text">
			                        </div><!-- /.field-row -->

			                        <div class="field-row">
			                            <label for="pass">Password</label>
			                            <input data-toggle="tooltip" data-placement="top" title="" name="password" class="form-control input-pass test" id="pass" data-minlength="6" required="" data-error="Mật khẩu phải ít nhất 6 kí tự" placeholder="Enter password" data-original-title="Enter password, please!!!" type="password">
			                        </div><!-- /.field-row -->

			                        <div class="field-row clearfix">
			                        	<span class="pull-left">
			                        		<label class="content-color"><input type="checkbox" class="le-checbox auto-width inline"> <span class="bold">Remember me</span></label>
			                        	</span>
			                        	<span class="pull-right">
			                        		<a href="#" class="content-color bold">Forgotten Password ?</a>
			                        	</span>
			                        </div>

			                        <div class="buttons-holder">
			                            <button type="submit" class="le-button huge">Secure Sign In</button>
			                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

			<div class="col-md-6">
				<section class="section register inner-left-xs">
					<h2 class="bordered">Create New Account</h2>
					<p>Create your own Media Center account</p>

					<form role="form" class="register-form cf-style-1">
						<div class="field-row">
                            <label>Email</label>
                            <input type="text" class="le-input">
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Sign Up</button>
                        </div><!-- /.buttons-holder -->
					</form>

					<h2 class="semi-bold">Sign up today and you'll be able to :</h2>

					<ul class="list-unstyled list-benefits">
						<li><i class="fa fa-check primary-color"></i> Speed your way through the checkout</li>
						<li><i class="fa fa-check primary-color"></i> Track your orders easily</li>
						<li><i class="fa fa-check primary-color"></i> Keep a record of all your purchases</li>
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