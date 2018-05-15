<header>
	<div class="container no-padding">
		
		<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
			<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
	<a href="<?php echo base_url('site/Home'); ?>">
		<!--<img alt="logo" src="<?php echo base_url(); ?>/upload/assets/images/logo.svg" width="233" height="54"/>-->
		<!--<object id="sp" type="image/svg+xml" data="<?php echo base_url(); ?>/upload/assets/images/logo.svg" width="233" height="54"></object>-->
		<img width="233px" height="104px" src="<?php echo base_url('public/site/images/logo/logo.jpg') ?>">
			
		</svg>
	</a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->		</div><!-- /.logo-holder -->

		<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
			<div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i> (+800) 123 456 7890
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i> contact@<span class="le-color">oursupport.com</span>
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form id="my_form" method="post" class="search" action="<?php echo base_url('site/Home/Search') ?>">
        <div class="control-group">
            <input name="txtSearch" class="search-field" placeholder="Search for item" />

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category-grid.html">all categories</a>

                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">laptops</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">tv & audio</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">gadgets</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">cameras</a></li>

                    </ul>
                </li>
            </ul>

            <a class="search-button" href="javascript:{}" onclick="document.getElementById('my_form').submit();" ></a>    

        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->		</div><!-- /.top-search-holder -->

		<div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
			<div class="top-cart-row-container">
    <div class="wishlist-compare-holder">
        <div class="wishlist ">
            <a href="#"><i class="fa fa-heart"></i> wishlist <span class="value">(21)</span> </a>
        </div>
        <div class="compare">
            <a href="#"><i class="fa fa-exchange"></i> compare <span class="value">(2)</span> </a>
        </div>
    </div>

    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
    <div class="top-cart-holder dropdown animate-dropdown">
        
        <div class="basket">
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="basket-item-count">
                    <span class="count">3</span>
                    <img src="<?php echo base_url(); ?>/upload/assets/images/icon-cart.png" alt="" />
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">$</span><span class="value">3219,00</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu">
                <div id="listproducts">
                <?php if ($listcart != ''): ?>
                    <?php foreach ($listcart as $key => $value): ?>
                        <li>
                            <div class="basket-item">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 no-margin text-center">
                                        <div class="thumb">
                                            <img alt="" src="<?php echo base_url(); ?>/upload/upload/product/<?php echo $value['image'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 no-margin">
                                        <div class="title"><?php echo $value['name'] ?></div>
                                        <div class="price"><?php echo $value['price'] ?></div>
                                    </div>
                                </div>
                                <a class="close-btn" href="#"></a>
                            </div>
                        </li>
                    <?php endforeach ?>
                <?php endif ?>
                </div>

                <!-- <li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img alt="" src="<?php echo base_url(); ?>/upload/assets/images/products/product-small-01.jpg" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title">Blueberry</div>
                                <div class="price">$270.00</div>
                            </div>
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </li>

                <li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img alt="" src="<?php echo base_url(); ?>/upload/assets/images/products/product-small-01.jpg" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title">Blueberry</div>
                                <div class="price">$270.00</div>
                            </div>
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </li> -->


                <li class="checkout">
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <a href="<?php echo base_url('site/Cart'); ?>" class="le-button inverse">View cart</a>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <a href="checkout.html" class="le-button">Checkout</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div><!-- /.basket -->
    </div><!-- /.top-cart-holder -->
</div><!-- /.top-cart-row-container -->
<!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->		</div><!-- /.top-cart-row -->

	</div><!-- /.container -->
</header>