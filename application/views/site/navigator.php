<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="<?php echo base_url('site/Home') ?>">Home</a></li>
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
                <li><a href="<?php echo base_url('site/About') ?>">About us</a></li>
                <li><a href="<?php echo base_url('site/Products') ?>">Products</a></li>
                <li><a href="<?php echo base_url('site/Contact') ?>">Contact</a></li>
                <li><a href="<?php echo base_url('site/Blog') ?>">Blog</a></li>
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
            <?php $data = $this->session->userdata('user'); ?>
            <?php if ($data!=null): ?>
                <?php $user_id = ''; ?>
                <?php foreach ($data as $key => $value): ?>
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-language"><?php echo $value['username']; ?></a>
                    <?php $user_id += $value['id']; ?>
                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('site/Profile') ?>">My Profile</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('site/Login/logout') ?>">Log out</a></li>
                    </ul>
                </li>
                <?php endforeach ?>
            <?php else: ?>
                <li><a href="<?php echo base_url('site/Register') ?>">Register</a></li>
                <li><a href="<?php echo base_url('site/Login') ?>">Login</a></li>
            <?php endif ?>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->
