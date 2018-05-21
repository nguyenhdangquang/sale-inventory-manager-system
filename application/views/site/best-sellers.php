<section id="bestsellers" class="color-bg wow fadeInUp">
    <div class="container">
        <h1 class="section-title">Best Sellers</h1>

        <div class="product-grid-holder medium">
            <div class="col-xs-12 col-md-7 no-margin">
                <div class="row no-margin">
                    <?php foreach ($list6products as $key => $value): ?>
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/upload/upload/product/<?php echo $value['image'] ?>" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">beats studio headphones official one</a>
                                </div>
                                <div class="brand">beats</div>
                            </div>
                            <div class="prices">

                                <div class="price-current text-right"><?php echo $this->cart->format_number($value['price']) ?> vnđ</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                    <a class="btn-add-to-compare" href="#">Compare</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->
                    <?php endforeach ?>
                </div><!-- /.row -->
            </div><!-- /.col -->
            <div class="col-xs-12 col-md-5 no-margin">
                <div class="product-item-holder size-big single-product-gallery small-gallery">
                    
                    <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="images/products/product-01.jpg">
                                <img alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/upload/assets/images/products/asus1.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide2">
                            <a data-rel="prettyphoto" href="images/products/asus2.jpg">
                                <img alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/upload/assets/images/products/dell1.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide3">
                            <a data-rel="prettyphoto" href="images/products/dell1.jpg">
                                <img alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/upload/assets/images/products/asus1.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->

                    <div class="gallery-thumbs clearfix">
                        <ul>
                            <li><a class="horizontal-thumb active" data-target="#best-seller-single-product-slider" data-slide="0" href="#slide1"><img alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/upload/assets/images/products/gallery-thumb-01.jpg" /></a></li>
                            <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="1" href="#slide2"><img alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/upload/assets/images/products/gallery-thumb-01.jpg" /></a></li>
                            <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="2" href="#slide3"><img alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/upload/assets/images/products/gallery-thumb-01.jpg" /></a></li>
                        </ul>
                    </div><!-- /.gallery-thumbs -->

                    <div class="body">
                        <div class="label-discount clear"></div>
                        <div class="title">
                            <a href="single-product.html">CPU intel core i5-4670k 3.4GHz BOX B82-12-122-41</a>
                        </div>
                        <div class="brand">sony</div>
                    </div>
                    <div class="prices text-right">
                        <div class="price-current inline">$1199.00</div>
                        <a href="cart.html" class="le-button big inline">add to cart</a>
                    </div>
                </div><!-- /.product-item-holder -->
            </div><!-- /.col -->

        </div><!-- /.product-grid-holder -->
    </div><!-- /.container -->
</section><!-- /#bestsellers -->
