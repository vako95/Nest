<?php $this->load->view('user/includes/headerStyle'); ?>


<!-- Quick view -->
<?php $this->load->view('user/includes/quickView'); ?>
<?php $this->load->view('user/includes/navbar'); ?>

<?php $this->load->view('user/includes/mobileMenu'); ?>
    <!--End header-->
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href='/' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Vendor <span></span> Dashboard
                </div>
            </div>
        </div>
        <div class="page-content pt-50">
            <div class="container">
                <h1 class="display-2 mt-30 pb-30">Dashboard</h1>
                <hr class="mb-80" />
                <div class="row">
                    <div class="col-lg-9">
                        <h3 class="mb-30">Recent Orders</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1357</td>
                                        <td>March 45, 2020</td>
                                        <td>Processing</td>
                                        <td>$125.00 for 2 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#2468</td>
                                        <td>June 29, 2020</td>
                                        <td>Completed</td>
                                        <td>$364.00 for 5 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#2366</td>
                                        <td>August 02, 2020</td>
                                        <td>Completed</td>
                                        <td>$280.00 for 3 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#1357</td>
                                        <td>March 45, 2020</td>
                                        <td>Processing</td>
                                        <td>$125.00 for 2 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#2468</td>
                                        <td>June 29, 2020</td>
                                        <td>Completed</td>
                                        <td>$364.00 for 5 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#2366</td>
                                        <td>August 02, 2020</td>
                                        <td>Completed</td>
                                        <td>$280.00 for 3 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#1357</td>
                                        <td>March 45, 2020</td>
                                        <td>Processing</td>
                                        <td>$125.00 for 2 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#2468</td>
                                        <td>June 29, 2020</td>
                                        <td>Completed</td>
                                        <td>$364.00 for 5 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="primary-sidebar">
                            <div class="sidebar-widget product-sidebar mt-15 p-30 bg-grey border-radius-10">
                                <h5 class="section-title style-1 mb-30">Best sell</h5>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/thumbnail-3.jpg" alt="#" />
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
                                        <p class="price mb-0 mt-5">$99.50</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/thumbnail-4.jpg" alt="#" />
                                    </div>
                                    <div class="content pt-10">
                                        <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
                                        <p class="price mb-0 mt-5">$89.50</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/thumbnail-5.jpg" alt="#" />
                                    </div>
                                    <div class="content pt-10">
                                        <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
                                        <p class="price mb-0 mt-5">$25</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width: 60%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-50 mt-50">
                    <div class="col-lg-12">
                        <h3 class="mb-30">Your Products</h3>
                        <div class="row product-grid">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-1-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Snack</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Seeds of Change Organic Quinoe Naturel</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-2-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-2-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Hodo Foods</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 80%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (3.5)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-3-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-3-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Snack</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Angie’s Boomchickapop Sweet & Salty</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 85%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-4-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-4-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Vegetables</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Foster Farms Takeout Crispy Classic</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-5-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-5-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Pet Foods</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Blue Diamond Almonds Lightly Naturel</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-6-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-6-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Hodo Foods</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Chobani Complete Vanilla Greek Bottle</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-7-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-7-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Meats</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-8-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-8-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Snack</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Encore Seafoods Stuffed Alaskan</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-9-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-9-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Coffes</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Gorton’s Beer Battered Fish Fillets</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-10-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-10-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Cream</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 50%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (2.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-1-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Snack</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Seeds of Change Organic Quinoe Naturel</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-2-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-2-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Hodo Foods</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 80%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (3.5)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-3-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-3-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Snack</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Angie’s Boomchickapop Sweet & Salty</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 85%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-4-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-4-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Vegetables</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Foster Farms Takeout Crispy Classic</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-5-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-5-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Pet Foods</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Blue Diamond Almonds Lightly Naturel</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-6-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-6-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Hodo Foods</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Chobani Complete Vanilla Greek Bottle</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-7-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-7-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Meats</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-8-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-8-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Snack</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Encore Seafoods Stuffed Alaskan</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-9-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-9-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Coffes</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Gorton’s Beer Battered Fish Fillets</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-10-1.jpg" alt="" />
                                                <img class="hover-img" src="<?php echo base_url('public/user/'); ?>assets/imgs/shop/product-10-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'>Cream</a>
                                        </div>
                                        <h2><a href='/shop-product-right'>Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 50%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (2.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'>Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-edit mr-5"></i>Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--product grid-->
                        <div class="pagination-area mt-20 mb-20">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
<?php $this->load->view('user/includes/footerStyle'); ?>
<!-- Vendor JS-->
<!-- Preloader Start -->
<?php $this->load->view('user/includes/preloaderActive'); ?>
<!-- Preloader End -->
<?php $this->load->view('user/includes/footerScript'); ?>
<!-- Vendor JS-->

</body>

</html>