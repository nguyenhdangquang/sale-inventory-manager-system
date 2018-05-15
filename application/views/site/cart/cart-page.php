<?php $data = $this->session->userdata('user'); ?>
<?php $total = 0; ?>
<?php $i = 1; ?>
<section id="cart-page">
    <div class="container">
        <?php echo form_open(Base_url('site/Cart/order')); ?>
        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-md-9 items-holder no-margin">
            <?php if ($data!=null): ?>
                <?php $user_id = 0; ?>
                <?php $user_name = ""; ?>
                <?php $user_email = ""; ?>
                <?php $user_phone = 0; ?>
                <?php foreach ($data as $key => $value): ?>
                    <?php $user_id = $value['id']; ?>
                    <?php $user_name = $value['username']; ?>
                    <?php $user_email = $value['email']; ?>
                    <?php $user_phone = $value['phone']; ?>
                <?php endforeach ?>
            <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
            <input type="hidden" name="user_name" value="<?php echo $user_name ?>">
            <input type="hidden" name="user_email" value="<?php echo $user_email ?>">
            <input type="hidden" name="user_phone" value="<?php echo $user_phone ?>">
            <?php endif ?>
            <div  id="cart_destroy" > 
                <?php foreach ($this->cart->contents() as $items): ?>
                    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                <div class="row no-margin cart-item">
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <a href="#" class="thumb-holder">
                            <img class="lazy" alt="" src="<?php echo base_url(); ?>/upload/upload/product/<?php echo $items['image'] ?>" />
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-5 ">
                        <div class="title">
                            <a href="#"><?php echo $items['name'] ?></a>
                        </div>
                        <div class="brand">sony</div>
                    </div> 


                    <div class="col-xs-12 col-sm-3 no-margin">
                        <div class="quantity">
                            <div class="le-quantity">
                                    <a class="minuss" onclick="minus(this);" href="#">-</a>
                                    <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'id' => 'quantity'.$i)); ?>
                                    <a class="pluss" onclick="plus(this);" href="#">+</a>
                            </div>
                        </div>
                    </div> 

                    <div class="col-xs-12 col-sm-2 no-margin">
                        <div class="price">
                            <?php echo $this->cart->format_number($items['price']); ?>
                        </div>
                        <a href="<?php echo Base_url('site/Cart/remove') ?>/<?php echo $items['rowid'] ?>" class="close-btn remove_inventory"></a>
                    </div>
                </div><!-- /.cart-item -->
                    <?php $i++; ?>
                <?php endforeach ?>
            </div>
        

        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->
        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">shopping cart</h1>
                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>cart subtotal</label>
                            <div class="value pull-right"><?php echo $total; ?> vnđ</div>
                        </li>
                        <li>
                            <label>shipping</label>
                            <div class="value pull-right">free shipping</div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>order total</label>
                            <div class="value pull-right"><?php echo $this->cart->format_number($this->cart->total()); ?> vnđ</div>
                            <input type="hidden" name="amount" value="<?php echo $total; ?>">
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a class="le-button big clear_cart">Clear</a>
                        <input type="submit" class="le-button big checkout" value="CheckOut">
                        <a class="simple-link block" href="#">continue shopping</a>
                    </div>
                </div>
            </div><!-- /.widget -->

            <div id="cupon-widget" class="widget">
                <h1 class="border">use coupon</h1>
                <div class="body">
                        <div class="inline-input">
                            <input data-placeholder="enter coupon code" type="text" />
                            <button class="le-button" type="submit">Apply</button>
                        </div>
                </div>
            </div><!-- /.widget -->
        </div><!-- /.sidebar -->
        </form>
        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>