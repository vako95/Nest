<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/headerList'); ?>
<?php $this->load->view('admin/includes/headerNavbar'); ?>



<section class="content-main sweatbody ">
    <div class="col-lg-6 px-2 mb-lg-4 d-flex justify-content-inline">
        <h3>Creat</h3>

    </div>
    <div class="row sweatbody ">
        <div id="alertt" style="display: none;" class="alert alert-danger alert-dismissible hide_block2 ">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Danger!</strong><? echo $this->session->flashdata('err'); ?>
        </div>
        <form action="<?php echo base_url('admin/edit/product/act'); ?>" method="post" enctype="multipart/form-data" id="form_product">
            <?php
            $product_template_decoded = json_decode($product_template["t_data"] ?? '{}', FALSE);
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Basic</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Product title</label>
                                <input id="rt" required name="product_title" type="text" placeholder="Type here" class="form-control rt" id="product_name" value="<?= $product_template_decoded->product_title ?? NULL; ?>" />
                            </div>
                            <div class="mb-4">
                                <label for="description" class="form-label">Full description</label>
                                <textarea name="description" placeholder="Type here" id="description" class="form-control" rows="4"><?= $product_template_decoded->product_description ?? NULL; ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label for="regular_price" class="form-label">Regular price</label>
                                        <div class="row gx-2">
                                            <input name="regular_price" id="regular_price" placeholder="$" type="text" class="form-control" value="<?= $product_template_decoded->product_regular_price ?? NULL; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label for="promotional_price" class="form-label">Promotional price</label>
                                        <input name="promotional_price" id="promotional_price" placeholder="$" type="text" class="form-control" value="<?= $product_template_decoded->product_promotional_price ?? NULL; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="currency" class="form-label">Currency</label>
                                    <select name="currency" id="currency" class="form-select">
                                        <!-- for make template -->
                                        <option <?= $product_template_decoded->product_currency ?? "USD" == "USD" ? "SELECTED" : "";  ?> value="USD">USD</option>
                                        <option <?= $product_template_decoded->product_currency ?? "USD" == "EUR" ? "SELECTED" : "";  ?> value="EUR">EUR</option>
                                        <option <?= $product_template_decoded->product_currency ?? "USD" == "RUBL" ? "SELECTED" : "";  ?> value="RUBL">RUBL</option>
                                     <!-- for make template -->
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="tax_rate" class="form-label">rate</label>
                                <input name="tax_rate" id="tax_rate" type="text" placeholder="%" class="form-control" id="product_name" />
                            </div>
                            <label for="make_template" class="form-check mb-4">
                                <input name="make_template" <?php echo !empty($product_template) ? "checked" : ""; ?> id="make_template" class="form-check-input" type="checkbox">

                                <span class="form-check-label"> Make a templatett </span>
                            </label>

                        </div>
                    </div>

                    <div class="card mb-4 ">
                        <div class="card-header">
                            <h4>Shipping</h4>
                        </div>
                        <div class="card-body">

                            <div class="row">
                          

                             
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Width</label>
                                        
                                        <input value="<?php echo $get_single_product['p_width']; ?>" name="width" id="widther" type="text" placeholder="inch" class="form-control" id="product_name" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Height</label>
                                        <input  value="<?php echo $get_single_product['p_height']; ?>" name="height" type="text" placeholder="inch" class="form-control" id="product_name" />
                                    </div>
                                </div>
                      
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Weight</label>
                                <input  value="<?php echo $get_single_product['p_weight']; ?>" name="weight" type="text" placeholder="gam" class="form-control" id="product_name" />
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Shipping fees</label>
                                <input  value="<?php echo $get_single_product['p_shipping_fees']; ?>" name="shipping_fees" type="text" placeholder="$" class="form-control" id="product_name" />
                            </div>

                        </div>
                    </div>


                    <!-- card end// -->
                    <!-- card end// -->
                </div>
                
                
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Media</h4>
                        </div>
                        <div class="card-body">
                           
                            <div class="input-upload">

                            <label for="choose_img">
                            <img class="custom-arrow" src="<?php echo base_url('public/admin/'); ?>assets/imgs/theme/upload.svg" alt="" />
                            </label>
                                <input id="choose_img" name="img" class="form-control" type="file" />
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Organization</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gx-2">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Category</label>
                                    <select name="category[]" class="form-select">
                                    <?php foreach($categories_list as $categories_item): ?>
                                            <option <?= $categories_item->parent_id ?> value="<?= $categories_item->c_id  ?> "> <?= $categories_item->c_product_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                       
                                  
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Sub-category</label>
                                    <select name="sub_category[]" class="form-select">
                                   <?php foreach($get_subcat as $get_subcat_item){ ?>
                                    <option <?= $get_subcat_item->s_cate_id ?> value="<?= $get_subcat_item->s_id  ?>"> <?= $get_subcat_item->s_name; ?></option>

                                  <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Tags</label>
                                    <input value="<?php echo $get_single_product['p_tags']; ?>"  name="tags" type="text" class="form-control" />
                                </div>

                            </div>
                            <!-- row.// -->
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>ADD Media</h4>
                            </div>
                            <div class="col-lg-12">
                                    <div class="mb-4">
                              <div class="card-header col-lg-12 mb-4">
                                
                             
                                    <button type="button" class="btn btn-primary mb-4 btn-md btn-block col-lg-12 justify-content-center" onclick="clearInputs()">Очистить инпуты</button>
                                    <button id="tt" onclick="saveData()" class="btn btn-info mb-4 col-lg-12   mr-5   justify-content-center  rounded font-sm  text-body hover-u btn-block">Send Form</button>
                                    <button type="submit" class="btn btn-light mb-4  col-lg-12 justify-content-center  rounded font-sm  text-body hover-up btn-block">Save to draft</button>

                                    </div>
                                    </div>
                                </div>
                            <div class="col-lg-12">
                                    <div class="mb-4">
                                  
                                   
                                    </div>
                                </div>
                          
                        </div>


                    </div>

                </div>
            </div>










            <!-- card end// -->

        </form>




    </div>
</section>
<!-- content-main end// -->
<?php $this->load->view('admin/includes/footerStyle');  ?>
<?php $this->load->view('admin/includes/footerScript');  ?>