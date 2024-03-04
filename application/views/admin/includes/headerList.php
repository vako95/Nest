<div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a class='brand-wrap' href='<?php echo base_url('admin_dashboard'); ?>'>
                <img src="<?php echo base_url('public/admin/'); ?>assets/imgs/theme/logo.svg" class="logo" alt="Nest Dashboard" />
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class='menu-link' href='<?php echo base_url('admin_dashboard'); ?>'>
                        <i class="icon material-icons md-home"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item has-submenu">
                    <a class='menu-link' href='<?php echo base_url('admin_product'); ?>'>
                        <i class="icon material-icons md-shopping_bag"></i>
                        <span class="text">Products</span>
                    </a>
                    <div class="submenu">
                        <a href='<?php echo base_url('admin/creat/product'); ?>'>Product Creat</a>
                        <a href='<?php echo base_url('admin/product/list'); ?>'>Product List</a>
                       <a href='<?php echo base_url('admin_categories'); ?>'>Categories</a>
                      
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class='menu-link' href='<?php echo base_url('admin_order'); ?>'>
                        <i class="icon material-icons md-shopping_cart"></i>
                        <span class="text">Orders</span>
                    </a>
                    <div class="submenu">
                        <a href='<?php echo base_url('admin_order_detail'); ?>'>Order list 1</a>
                      
                        <a href='/page-orders-detail'>Order detail</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class='menu-link' href='<?php echo base_url('admin_sellers'); ?>'>
                        <i class="icon material-icons md-store"></i>
                        <span class="text">Sellers</span>
                    </a>
                    <div class="submenu">
                     <a href='<?php echo base_url('admin_sellers'); ?>'>Seller list</a>
                        <a href='<?php echo base_url('admin_sellers_profile'); ?>'>Seller profile</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class='menu-link' href='<?php echo base_url('admin_sellers'); ?>'>
                        <i class="icon material-icons md-add_box"></i>
                        <span class="text">Add product</span>
                    </a>
                    <div class="submenu">
                        <a href='<?php echo base_url('admin/creat/product'); ?>'>Add product </a>
                      
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class='menu-link' href='<?php echo base_url('admin_transactions'); ?>admin_transactions'>
                        <i class="icon material-icons md-monetization_on"></i>
                        <span class="text">Transactions</span>
                    </a>
                    <div class="submenu">
                        <a href='admin_transactions'>Transaction </a>
                     
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="<?php echo base_url('admin_creat_product'); ?>">
                        <i class="icon material-icons md-person"></i>
                        <span class="text">Account</span>
                    </a>
                    <div class="submenu">
                        <a href='<?php echo base_url('admin_login'); ?>'>User login</a>
                        <a href='<?php echo base_url('admin_registr'); ?>'>User registration</a>
                        <a href='<?php echo base_url('admin_not_found'); ?>'>Error 404</a>
                    </div>
                </li>
                <li class="menu-item">
                    <a class='menu-link' href='<?php echo base_url('admin_reviews'); ?>'>
                        <i class="icon material-icons md-comment"></i>
                        <span class="text">Reviews</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class='menu-link' href='<?php echo base_url('admin_brands'); ?>'> <i class="icon material-icons md-stars"></i> <span class="text">Brands</span> </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" disabled href="">
                        <i class="icon material-icons md-pie_chart"></i>
                        <span class="text">Statistics</span>
                    </a>
                </li>
            </ul>
            <hr />
            <ul class="menu-aside">
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="<?php echo base_url('admin_site_setting'); ?>">
                        <i class="icon material-icons md-settings"></i>
                        <span class="text">Settings</span>
                    </a>
                    <div class="submenu">
                        <a href='<?php echo base_url('admin_site_setting'); ?>'>Setting sample 1</a>
                        <a href='<?php echo base_url('admin_brands'); ?>'>Setting sample 2</a>
                    </div>
                </li>
                <li class="menu-item">
                    <a class='menu-link' href='<?php echo base_url('admin_starter_page'); ?>'>
                        <i class="icon material-icons md-local_offer"></i>
                        <span class="text"> Starter page </span>
                    </a>
                </li>
            </ul>
            <br />
            <br />
        </nav>
    </aside>

    <main class="main-wrap">