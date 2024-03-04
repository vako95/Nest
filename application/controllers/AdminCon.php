<?php
class AdminCon extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        $this->load->model('AdminModel');
    }

    public function dashboard()
    {

        $this->load->view('admin/dashboard');
    }

    public function product_list()
    {
        $data['get_product'] = $this->AdminModel->get_product_list();
        
        $this->load->view('admin/NavbarList/products/product_list', $data);
    }
    public function product_categories()
    {

        $this->load->view('admin/NavbarList/products/product_categories');
    }
    public function order_list()
    {

        $this->load->view('admin/NavbarList/orders/order_list');
    }
    public function order_detail()
    {

        $this->load->view('admin/NavbarList/orders/order_detail');
    }
    public function sellers_list()
    {

        $this->load->view('admin/NavbarList/sellers/sellers_list');
    }
    public function sellers_profile()
    {

        $this->load->view('admin/NavbarList/sellers/sellers_profile');
    }

    //CREAT PRODUCT
    public function creat_product()
    {

        $this->load->view('admin/NavbarList/products_creat/creat_product');
    }
    public function creat_product_act()
    {


        $product_title      = $this->input->post('product_title', TRUE);
        $description        = $this->input->post('description', TRUE);
        $regular_price      = $this->input->post('regular_price', TRUE);
        $promotional_price  = $this->input->post('promotional_price', TRUE);
        $currency           = $this->input->post('currency', TRUE);
        $tax_rate           = $this->input->post('tax_rate', TRUE);
        $width              = $this->input->post('width', TRUE);
        $height             = $this->input->post('height', TRUE);
        $weight             = $this->input->post('weight', TRUE);
        $shipping_fees      = $this->input->post('shipping_fees', TRUE);
        $category           = $this->input->post('category', TRUE);
        $sub_category       = $this->input->post('sub_category', TRUE);



        if (
            !empty($product_title) &&
            !empty($description) &&
            !empty($regular_price) &&
            !empty($promotional_price) &&
            !empty($currency) &&
            !empty($tax_rate) &&
            !empty($width) &&
            !empty($height) &&
            !empty($weight) &&
            !empty($shipping_fees) &&
            !empty($category) &&
            !empty($shipping_fees) &&
            !empty($sub_category)


        ) {
            $config['upload_path']          = './uploads/nest/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|mp3|mp4|';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if ($this->upload->do_upload('img')) {
                $img     = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    'p_product_title'      =>  $product_title,
                    'p_description'        =>  $description,
                    'p_regular_price'      =>  $regular_price,
                    'p_promotional_price'  =>  $promotional_price,
                    'p_currency'           =>  $currency,
                    'p_tax_rate'           =>  $tax_rate,
                    'p_width'              =>  $width,
                    'p_height'             =>  $height,
                    'p_weight'             =>  $weight,
                    'p_shipping_fees'      =>  $shipping_fees,
                    'p_category'           =>  $category,
                    'p_sub_category'       =>  $sub_category,
                    'p_img'                =>  $img,
                    'p_img_ext'            =>  $img_ext,

                ];

                $this->AdminModel->insert($data);
                redirect(base_url('admin_dashboard'));
            } else {

                $data = [
                    'p_product_title'       =>  $product_title,
                    'p_description'        =>  $description,
                    'p_regular_price'      =>  $regular_price,
                    'p_promotional_price'  =>  $promotional_price,
                    'p_currency'           =>  $currency,
                    'p_tax_rate'           =>  $tax_rate,
                    'p_width'              =>  $width,
                    'p_height'             =>  $height,
                    'p_weight'             =>  $weight,
                    'p_shipping_fees'      =>  $shipping_fees,
                    'p_category'           =>  $category,
                    'p_sub_category'       =>  $sub_category,
                    'p_tags'               =>  $tags,


                ];
                $this->AdminModel->insert($data);
                redirect('admin_creat_product');
            }
        } else {

            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function edit_product($id){
        $this->load->view('admin/NavbarList/products_creat/edit_product');
    }



    public function transactions()
    {

        $this->load->view('admin/NavbarList/transactions/transactions');
    }
    //LOGIN USER REGISTR PAGE
    public function user_login()
    {

        $this->load->view('admin/NavbarList/account/user_login');
    }
    public function user_registr()
    {

        $this->load->view('admin/NavbarList/account/user_registration');
    }
    public function not_found()
    {

        $this->load->view('admin/NavbarList/account/not_found');
    }

    //OTHERS PAGES
    public function reviews()
    {

        $this->load->view('admin/NavbarList/others/reviews');
    }
    public function brands()
    {

        $this->load->view('admin/NavbarList/others/brands');
    }
    public function profile_setting()
    {

        $this->load->view('admin/NavbarList/others/profile_setting');
    }
    public function site_setting()
    {

        $this->load->view('admin/NavbarList/others/site_setting');
    }
    public function starter_page()
    {

        $this->load->view('admin/NavbarList/others/starter_page');
    }
}
