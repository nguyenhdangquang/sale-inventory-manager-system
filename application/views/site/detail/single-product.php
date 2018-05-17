<div id="single-product">
    <div class="container">
    <?php foreach ($detail_desc as $key => $value): ?>
         <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                    <img class="img-responsive" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide2">
                <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                    <img class="img-responsive" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide3">
                <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                    <img class="img-responsive" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->
        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                    <img width="67" alt="" src="<?php echo base_url(); ?>/upload/assets/images/blank.gif" data-echo="<?php echo base_url(); ?><?php echo $value['image'] ?>" />
                </a>
            </div><!-- /#owl-single-product-thumbnails -->

            <div class="nav-holder left hidden-xs">
                <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
            </div><!-- /.nav-holder -->
            
            <div class="nav-holder right hidden-xs">
                <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
            </div><!-- /.nav-holder -->

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        
        <div class="no-margin col-xs-12 col-sm-7 body-holder">
    <div class="body">
        <div class="star-holder inline"><div class="star" data-score="4"></div></div>
        <div class="availability"><label>Availability:</label><span class="available">  in stock</span></div>

        <div class="title"><a href="#"><?php echo $value['name'] ?></a></div>
        <div class="brand">sony</div>

        <div class="social-row">
            <span class="st_facebook_hcount"></span>
            <span class="st_twitter_hcount"></span>
            <span class="st_pinterest_hcount"></span>
        </div>

        <div class="buttons-holder">
            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
            <a class="btn-add-to-compare" href="#">add to compare list</a>
        </div>

        <div class="excerpt">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque, ratione nesciunt, nemo recusandae veniam! In culpa dolorem, corporis repellat modi eveniet magnam dicta error, illum, dolorum repudiandae aut, eaque.</p>
        </div>
        
        <div class="prices">
            <div class="price-current"><?php echo $value['price'] ?> vnđ</div>
            <div class="price-prev"><?php echo $value['price'] ?> vnđ</div>
        </div>

        <div class="qnt-holder">
            <div class="le-quantity">
                <form>
                    <a class="minus" href="#reduce"></a>
                    <input name="quantity" readonly="readonly" type="text" value="1" />
                    <a class="plus" href="#add"></a>
                </form>
            </div>
            <a id="addto-cart" href="cart.html" class="le-button huge">add to cart</a>
        </div><!-- /.qnt-holder -->
    </div><!-- /.body -->

    </div><!-- /.body-holder -->
    <?php endforeach ?>
    </div><!-- /.container -->
</div><!-- /.single-product -->