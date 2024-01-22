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
    public function creat_product_act(){

        $product_name = $this->input->post('product_name');
        $description = $this->input->post('description');
        $regular_price = $this->input->post('regular_price');
        $promotional_price = $this->input->post('promotional_price');

        $currency = $this->input->post('currency');
        $make_template = $this->input->post('make_template');
        $width = $this->input->post('width');
        $height = $this->input->post('height');
        $weight = $this->input->post('weight');
        $shipping_fees = $this->input->post('shipping_fees');
        $category = $this->input->post('category');
        $sub_category = $this->input->post('sub_category');
        $tax_rate = $this->input->post('tax_rate');


        if(!empty($product_name) && 
        !empty($description) && 
        !empty($regular_price) && 
        !empty($promotional_price) && 
  
        !empty($currency) && 
        !empty($width) &&
        !empty($height) &&
        !empty($weight) &&
        !empty($shipping_fees) &&
        !empty($category) &&
        !empty($shipping_fees) &&
        !empty($sub_category) &&
        !empty($make_template)  &&
        !empty($tax_rate) 
        
        )
        {

         $data = [
        $p_product_name =>  $product_name,
        $p_description  =>  $description ,       
        $p_regular_price =>  $regular_price ,       
        $p_promotional_price =>  $promotional_price ,       
        $p_currency =>  $currency ,       
        $p_make_template =>  $make_template ,       
        $p_width =>  $width ,       
        $p_height =>  $height ,       
        $p_weight =>  $weight ,       
        $p_shipping_fees =>  $shipping_fees ,       
        $p_category =>  $category ,       
        $p_sub_category =>  $sub_category ,       
        $p_tax_rate =>  $tax_rate        
    
       ];
       print_r('<pre>');
       print_r($data);

        } else{
            redirect($_SERVER['HTTP_REFEVER']);
        }

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