<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/headerList'); ?>
<?php $this->load->view('admin/includes/headerNavbar'); ?>


<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Products grid</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            <a href="#" class="btn btn-light rounded font-md">Export</a>
            <a href="#" class="btn btn-light rounded font-md">Import</a>
            <a href="#" class="btn btn-primary btn-sm rounded">Create new</a>
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <input type="text" placeholder="Search..." class="form-control" />
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>All category</option>
                        <option>Electronics</option>
                        <option>Clothings</option>
                        <option>Something else</option>
                    </select>
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Latest added</option>
                        <option>Cheap first</option>
                        <option>Most viewed</option>
                    </select>
                </div>
            </div>
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">
                <?php foreach ($get_product as $get_product_key) { ?>
                    <div class="col">
                        <div class="card card-product-grid">
                            <?php if ($get_product_key['p_img']) { ?>
                                <a href="#" style="object-fit: cover; width:100%; height:180px;" class="img-wrap"> <img src="<?php echo base_url('uploads/Nest/' . $get_product_key['p_img']); ?>" alt="Product" /> </a>
                            <?php } else {  ?>
                                <a href="#" style="object-fit: cover; width:100%; height:180px;" class="img-wrap"> <img src="<?php echo base_url('public/admin/') ?>assets/imgs/no-product/free-vector.jpg" alt="Product" /> </a>
                            <?php } ?>
                            <div class="info-wrap">
                                <a href="#" class="title text-truncate"><?php echo $get_product_key['p_product_title']; ?></a>
                                <div class="price mb-2"><?php echo $get_product_key['p_regular_price']; ?></div>
                                <!-- price.// -->
                                <a href="<?php echo base_url('admin/edit/product/'. $get_product_key['p_id']); ?>" class="btn btn-sm font-sm rounded btn-brand"> <i class="material-icons md-edit fa-md"></i> Edit </a>
                                <a href="<?php echo base_url('admin/delete/product/'. $get_product_key['p_id']); ?>"class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever fa-md"></i> Delete </a>
                            </div>
                        </div>

                    </div>
                <?php  } ?>

                <!-- col.// -->

                <!-- col.// -->

                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- card-body end// -->
    </div>
    <!-- card end// -->
    <div class="pagination-area mt-30 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- content-main end// -->
<?php $this->load->view('admin/includes/footerStyle');  ?>
<?php $this->load->view('admin/includes/footerScript');  ?>