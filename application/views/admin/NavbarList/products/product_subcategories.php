<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/headerList'); ?>
<?php $this->load->view('admin/includes/headerNavbar'); ?>

            <section class="content-main">
                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Sub Categories</h2>
                        <p>Add, edit or delete a category</p>
                    </div>
                    <div>
                        <input type="text" placeholder="Search Categories" class="form-control bg-white" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <form action="<?= base_url('admin/sub/categories/act') ?>" method="post" enctype="multipart/form-data" id="cate">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Name</label>
                                        <input name="product_name" type="text" placeholder="Type here" class="form-control" id="product_name" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_slug" class="form-label">Slug</label>
                                        <input name="product_slug" type="text" placeholder="Type here" class="form-control" id="product_slug" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Parent</label>
                                        <select multiple name="subcat[]" class="form-select">
 
                                            <?php foreach($get_subcat as $get_subcat_item){  ?>
                                                <option <?php !is_null($get_subcat_item->s_cate_id) ? 'disabled' : ''; ?> value="<?= $get_subcat_item->s_id; ?> "> <?= $get_subcat_item->s_name; ?></option>
                                          <?php   } ?>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" placeholder="Type here" class="form-control"></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" id="cate" class="btn btn-primary">Create category</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-9">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Slug</th>
                                                <th>Order</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </td>
                                                <td>21</td>
                                                <td><b>Cake & Milk</b></td>
                                                <td>Cake & Milk</td>
                                                <td>/cake</td>
                                                <td>1</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View detail</a>
                                                            <a class="dropdown-item" href="#">Edit info</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown //end -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </td>
                                                <td>2</td>
                                                <td><b>Oganic Kiwi</b></td>
                                                <td>EU standard</td>
                                                <td>/kiwi</td>
                                                <td>2</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View detail</a>
                                                            <a class="dropdown-item" href="#">Edit info</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown //end -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td><b>Peach</b></td>
                                                <td>Peach</td>
                                                <td>/peach</td>
                                                <td>3</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View detail</a>
                                                            <a class="dropdown-item" href="#">Edit info</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown //end -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                                <td>4</td>
                                                <td><b>Red Apple</b></td>
                                                <td>Red Apple</td>
                                                <td>/apple</td>
                                                <td>4</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View detail</a>
                                                            <a class="dropdown-item" href="#">Edit info</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown //end -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                                <td>5</td>
                                                <td><b>Snack</b></td>
                                                <td>Snack</td>
                                                <td>/snack</td>
                                                <td>5</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View detail</a>
                                                            <a class="dropdown-item" href="#">Edit info</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown //end -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </td>
                                                <td>6</td>
                                                <td><b>Vegetables</b></td>
                                                <td>Vegetables</td>
                                                <td>/vegetables</td>
                                                <td>6</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View detail</a>
                                                            <a class="dropdown-item" href="#">Edit info</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown //end -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </td>
                                                <td>7</td>
                                                <td><b>Strawberry</b></td>
                                                <td>Strawberry</td>
                                                <td>/strawberry</td>
                                                <td>7</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View detail</a>
                                                            <a class="dropdown-item" href="#">Edit info</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown //end -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </td>
                                                <td>8</td>
                                                <td><b>Black plum</b></td>
                                                <td>Black plum</td>
                                                <td>/plum</td>
                                                <td>8</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View detail</a>
                                                            <a class="dropdown-item" href="#">Edit info</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown //end -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- .col// -->
                        </div>
                        <!-- .row // -->
                    </div>
                    <!-- card body .// -->
                </div>
                <!-- card .// -->
            </section>
            <!-- content-main end// -->
            <?php $this->load->view('admin/includes/footerStyle');  ?>
<?php $this->load->view('admin/includes/footerScript');  ?>