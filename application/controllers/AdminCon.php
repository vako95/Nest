<?php
 class AdminCon extends CI_Controller{

    public function dashboard(){

        $this->load->view('admin/dashboard');
    }

    public function product_list(){

        $this->load->view('admin/NavbarList/products/product_list');
    }
    public function product_categories(){

        $this->load->view('admin/NavbarList/products/product_categories');
    }
    public function order_list(){

        $this->load->view('admin/NavbarList/orders/order_list');
    }
    public function order_detail(){

        $this->load->view('admin/NavbarList/orders/order_detail');
    }
    public function sellers_list(){

        $this->load->view('admin/NavbarList/sellers/sellers_list');
    }
    public function sellers_profile(){

        $this->load->view('admin/NavbarList/sellers/sellers_profile');
    }

    //CREAT PRODUCT
    public function creat_product(){

        $this->load->view('admin/NavbarList/products_creat/creat_product');
    }
    public function transactions(){

        $this->load->view('admin/NavbarList/transactions/transactions');
    }
    //LOGIN USER REGISTR PAGE
    public function user_login(){

        $this->load->view('admin/NavbarList/account/user_login');
    }
    public function user_registr(){

        $this->load->view('admin/NavbarList/account/user_registration');
    }
    public function not_found(){

        $this->load->view('admin/NavbarList/account/not_found');
    }

    //OTHERS PAGES
    public function reviews(){

        $this->load->view('admin/NavbarList/others/reviews');
    }
    public function brands(){

        $this->load->view('admin/NavbarList/others/brands');
    }
    public function profile_setting(){

        $this->load->view('admin/NavbarList/others/profile_setting');
    }
    public function site_setting(){

        $this->load->view('admin/NavbarList/others/site_setting');
    }
    public function starter_page(){

        $this->load->view('admin/NavbarList/others/starter_page');
    }

 }