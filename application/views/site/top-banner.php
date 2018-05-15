<div id="top-banner-and-menu">
	<div class="container">
		<div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
			<!-- ================================== TOP NAVIGATION ================================== -->
			<div class="side-menu animate-dropdown">
				<div class="head"><i class="fa fa-list"></i> all departments</div>
				<nav class="yamm megamenu-horizontal"
				 role="navigation">
					<ul class="nav">
						<?php foreach ($listcatalogies as $key => $value): ?>
						<li class="dropdown menu-item"> <a href="<?php echo base_url('site/Home/productsbyID/') ?><?php echo $value['id'] ?>" class="dropdown-toggle"><?php echo $value['name'] ?></a>
							<!-- <ul class="dropdown-menu mega-menu">
								<li class="yamm-content">
									<div class="row">
										<div class="col-md-4">
											<ul class="list-unstyled">
												<li><a href="index.html">Home</a></li>
												<li><a href="index-2.html">Home Alt</a></li>
												<li><a href="category-grid.html">Category - Grid/List</a></li>
												<li><a href="category-grid-2.html">Category 2 - Grid/List</a></li>
												<li><a href="single-product.html">Single Product</a></li>
												<li><a href="single-product-sidebar.html">Single Product with Sidebar</a></li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="list-unstyled">
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="about.html">About Us</a></li>
												<li><a href="contact.html">Contact Us</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-fullwidth.html">Blog Full Width</a></li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="list-unstyled">
												<li><a href="blog-post.html">Blog Post</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="terms.html">Terms & Conditions</a></li>
												<li><a href="authentication.html">Login/Register</a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul> -->
						</li>
						<?php endforeach ?>
						<!-- /.menu-item -->
						<li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tìm kiếm theo giá</a>
							<ul
							 class="dropdown-menu mega-menu">
								<li class="yamm-content">
									<!-- ================================== MEGAMENU VERTICAL ================================== -->
									<div class="row">
										<div class="col-xs-12 col-lg-4">
											<ul>
												<li><a href="#"> 0 - 1,000,000 vnđ</a></li>
												<li><a href="#">1,000,000 - 5,000,000 vnđ</a></li>
												<li><a href="#">5,000,000 - 10,000,000 vnđ</a></li>
												<li><a href="#"> > 10,000,000 vnđ</a></li>
											</ul>
										</div>
										<!-- <div class="col-xs-12 col-lg-4">
											<ul>
												<li><a href="#">Power Supplies Power</a></li>
												<li><a href="#">Power Supply Testers Sound</a></li>
												<li><a href="#">Sound Cards (Internal)</a></li>
												<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
												<li><a href="#">Other</a></li>
											</ul>
										</div> -->
										<div class="dropdown-banner-holder"> <a href="#"><img alt="" src="<?php echo base_url(); ?>/upload/assets/images/banners/banner-side.png" /></a>										</div>
									</div>
									<!-- ================================== MEGAMENU VERTICAL ================================== -->
								</li>
							</ul>
						</li>
					<!-- /.menu-item -->
					</ul>
					<!-- /.nav -->
				</nav>
				<!-- /.megamenu-horizontal -->
			</div>
			<!-- /.side-menu -->
			<!-- ================================== TOP NAVIGATION : END ================================== -->
		</div>
		<!-- /.sidemenu-holder -->
		<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
			<!-- ========================================== SECTION – HERO ========================================= -->
			<div id="hero">
				<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
					<div class="item" style="background-image: url(<?php echo base_url(); ?>/upload/assets/images/sliders/slider01.jpg);">
						<div class="container-fluid">
							<div class="caption vertical-center text-left">
								<div class="big-text fadeInDown-1"> Save up to a<span class="big"><span class="sign">$</span>400</span>
								</div>
								<div class="excerpt fadeInDown-2"> on selected laptops<br> & desktop pcs or<br> smartphones </div>
								<div class="small fadeInDown-2">
								terms and conditions apply </div>
								<div class="button-holder fadeInDown-3">
								<a href="single-product.html" class="big le-button ">shop now</a> </div>
							</div>
							<!-- /.caption -->
						</div>
						<!-- /.container-fluid -->
					</div>
					<!-- /.item -->
					<div class="item" style="background-image: url(<?php echo base_url(); ?>/upload/assets/images/sliders/slider03.jpg);">
						<div class="container-fluid">
							<div class="caption vertical-center text-left">
								<div class="big-text fadeInDown-1"> Want a<span class="big"><span class="sign">$</span>200</span>Discount? </div>
								<div class="excerpt fadeInDown-2"> on selected <br>desktop pcs<br> </div>
								<div class="small fadeInDown-2"> terms and conditions apply </div>
								<div class="button-holder fadeInDown-3">
								<a href="single-product.html" class="big le-button ">shop now</a> </div>
							</div>
							<!-- /.caption -->
						</div>
						<!-- /.container-fluid -->
					</div>
					<!-- /.item -->
				</div>
				<!-- /.owl-carousel -->
			</div>
			<!-- ========================================= SECTION – HERO : END ========================================= -->
		</div>
		<!-- /.homebanner-holder -->
	</div>
	<!-- /.container -->
</div>
