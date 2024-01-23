<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/headerList'); ?>
<?php $this->load->view('admin/includes/headerNavbar'); ?>

<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Add New Product</h2>
                <div>
                    <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                    <button type="submit" class="btn btn-md rounded font-sm hover-up form-control"  form="basic_form">Basic Form</button>
                    <button type="submit"  class="btn btn-md rounded font-sm hover-up form-control" form="shipping_form">Shippin Form</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Basic</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin_creat_product_act'); ?>" method="post" enctype="multipart/form-data" id="basic_form">
                    <input type="hidden" name="current_form" value="basic_form" id="basic_form">
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Product title</label>
                            <input name="product_name" type="text" placeholder="Type here" class="form-control" id="product_name" />
                        </div>
                        <div class="mb-4">
                            <label for="description" class="form-label">Full description</label>
                            <textarea name="description" placeholder="Type here" id="description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="regular_price" class="form-label">Regular price</label>
                                    <div class="row gx-2">
                                        <input name="regular_price" id="regular_price" placeholder="$" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="promotional_price" class="form-label">Promotional price</label>
                                    <input name="promotional_price" id="promotional_price" placeholder="$" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="currency" class="form-label">Currency</label>
                                <select name="currency" id="currency" class="form-select">
                                    <option>USD</option>
                                    <option>EUR</option>
                                    <option>RUBL</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="tax_rate" class="form-label">Tax rate</label>
                            <input name="tax_rate" id="tax_rate" type="text" placeholder="%" class="form-control" id="product_name" />
                        </div>
                        <label for="make_template" class="form-check mb-4">
                            <input name="make_template" id="make_template" class="form-check-input" type="checkbox" value="" />
                            <span class="form-check-label"> Make a template </span>
                        </label>
                    </form>
                </div>
            </div>


            <!-- card end// -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Shipping</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin_creat_product_act'); ?>" method="post" enctype="form/multipart-control" id="shipping_form">
                    <input type="hidden" name="shipping_form" value="shipping_form" id="shipping_form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Width</label>
                                    <input name="width" type="text" placeholder="inch" class="form-control" id="product_name" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Height</label>
                                    <input name="height" type="text" placeholder="inch" class="form-control" id="product_name" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Weight</label>
                            <input name="weight" type="text" placeholder="gam" class="form-control" id="product_name" />
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Shipping fees</label>
                            <input name="shipping_fees" type="text" placeholder="$" class="form-control" id="product_name" />
                        </div>
                    </form>
                </div>
            </div>
            <!-- card end// -->
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Media</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <img src="<?php echo base_url('public/admin/'); ?>assets/imgs/theme/upload.svg" alt="" />
                        <input name="img" class="form-control" type="file" />
                    </div>
                </div>
            </div>
            <!-- card end// -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Organization</h4>
                </div>
                <div class="card-body">
                    <div class="row gx-2">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-select">
                                <option value="Automobiles">Automobiles</option>
                                <option value="Home items">Home items</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Smartphones">Smartphones</option>
                                <option value="Sport items">Sport items</option>
                                <option value="Baby and Tous">Baby and Tous</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label">Sub-category</label>
                            <select name="sub_category" class="form-select">
                                <option value="Nissan">Nissan</option>
                                <option value="Honda">Honda</option>
                                <option value="Mercedes">Mercedes</option>
                                <option value="Chevrolet">Chevrolet</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Tags</label>
                            <input name="tags" type="text" class="form-control" />
                        </div>
                    </div>
                    <!-- row.// -->
                </div>
            </div>
            <!-- card end// -->
        </div>
    </div>
</section>
<!-- content-main end// -->
<?php $this->load->view('admin/includes/footerStyle');  ?>
<?php $this->load->view('admin/includes/footerScript');  ?>