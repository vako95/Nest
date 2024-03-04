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
        $data['get_product'] = $this->AdminModel->get_product();
      
  
        $data['product_list'] = $this->AdminModel->get_all_cate(array(
            "table" => "categories",
            "condition" =>  "categories.c_id = product.p_category"
        ),
        "product.p_id p_category , product.p_id p_product_title, categories.c_product_name,	product.p_product_title p_product_title"
    
    );



   
        $this->load->view('admin/NavbarList/products/product_list', $data);
    }





    //TESTTTTT DRIVE


    // public function product_categories_test()
    //     {
    //         $data["categories_list_test"] = $this->AdminModel->get_categories_test();
    //         $this->load->view('admin/NavbarList/products/product_categories_test', $data);
    //     }
    //     public function product_categories_act_test(){
    //         $product_name = $this->input->post('product_name', TRUE);
    //         $product_slug = $this->input->post('product_slug', TRUE);
    //         $description = $this->input->post('description', TRUE);
    //         $parent = !Null;
    //         if($this->input->post('parent', TRUE)){
    //             $parent = implode(";" ,$this->input->post('parent',TRUE));
    //         }






    //     if (
    //         !empty($product_name) &&
    //         !empty($product_slug) &&

    //         !empty($description)
    //     ) {


    //         $data_category = array(
    //             't_product_name' => $product_name,
    //             't_product_slug' => $product_slug,
    //             't_description'  => $description,

    //             't_parent_id' => $parent 
    //         );

    //     }
    //     $this->AdminModel->test_category($data_category);
    // }

    //TESTTTTT DRIVE














    //PRODUCT CATEGORIES START
    public function product_categories()
    {
        $data['get_subcat'] = $this->AdminModel->get_subcategory();
        $data["categories_list"] = $this->AdminModel->get_categories();
        $this->load->view('admin/NavbarList/products/product_categories', $data);
    }

    public function product_categories_act()
    {

        $product_name = $this->input->post('product_name', TRUE);
        $product_slug = $this->input->post('product_slug', TRUE);
        $description = $this->input->post('description', TRUE);
        $parent = Null;
        if ($this->input->post('parent', TRUE)) {
            $parent = implode(";", $this->input->post('parent', TRUE));
        }



        if (
            !empty($product_name) &&
            !empty($product_slug) &&

            !empty($description)
        ) {


            $data_category = array(
                'c_product_name' => $product_name,
                'c_product_slug' => $product_slug,
                'c_description' => $description,

                'parent_id' => $parent ?? NULL

            );

            /*             $data_parent = array(
                'p_name' => $parent,

            ); */

            // $data = [

            //     "title" => "s_title",
            //     "c_id" => "id"
            //       ""

            // ]

            // $data_cateories = [
            //     "Milk" => "p_id = 1",
            //     "Cake" => "p_id = 2",
            //     "Product" => [
            //         "Milk" => "p_id = 1",
            //         "Cake" => "p_id = 2"
            //     ],
            //     "Milk" =>[
            //         "cheese" => "2"
            //         "butter" => "3",
            //         'sirok' => [
            //             ""
            //         ]


            //     ]

            // ]
            // $priduct = $product_cate



            $this->AdminModel->insert_category($data_category);
            redirect(base_url('admin_categories'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function sub_categories()
    {
        $data['get_subcat'] = $this->AdminModel->get_subcategory();
        $this->load->view('admin/Navbarlist/products/product_subcategories', $data);
    }
    public function sub_categories_act()
    {
        $product_name = $this->input->post('product_name', TRUE);
        $product_slug = $this->input->post('product_slug', TRUE);
        $description = $this->input->post('description', TRUE);
        $subcat = Null;
        if ($this->input->post('subcat', TRUE))
            $subcat = implode(";", $this->input->post('subcat', TRUE));

        if (
            !empty($product_name) &&
            !empty($product_slug) &&
            !empty($description)
        ) {
            $data_subcategory = [

                's_name'         => $product_name,
                's_product_slug' => $product_slug,
                's_description'  => $description,
                's_cate_id' => $subcat ?? NULL


            ];

            $this->AdminModel->inset_subcategory($data_subcategory);
            redirect(base_url('admin/sub/categories'));
        }
    }

    //PRODUCT CATEGORIES END








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

    //CREAT PRODUCT START
    public function creat_product()
    {

        $template_name = "product_template";
        $data["product_template"] = $this->AdminModel->get_product_template($template_name);
        $data['categories_list'] = $this->AdminModel->category_get();
        $data['get_subcat'] = $this->AdminModel->get_subcategory();

        $this->load->view('admin/NavbarList/products_creat/creat_product', $data);
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
 
        $tags               = $this->input->post('tags', TRUE);

        $sub_category = Null;
        if ($this->input->post('sub_category', TRUE))
            $sub_category = implode(";", $this->input->post('sub_category', TRUE));
        $category = Null;
        if ($this->input->post('category', TRUE))
            $category = implode(";", $this->input->post('category', TRUE));


        $make_template = str_contains($this->input->post("make_template", TRUE), "on") ? TRUE : FALSE;
        $template_name = "product_template";
        $product_template = $this->AdminModel->get_product_template($template_name);

        if ($make_template) {
            if (empty($product_template)) {
                $json_decoded_data = [
                    "product_title" => $product_title,
                    "product_description" => $description,
                    "product_regular_price" => $regular_price,
                    "product_currency" => $currency
                ];

                $json_encoded_data = json_encode($json_decoded_data);

                $data = [
                    "t_data" => $json_encoded_data,
                    "t_name" => $template_name
                ];

                $this->AdminModel->insert_product_template($data);
            } else {
                $json_decoded_data = [
                    "product_title" => $product_title,
                    "product_description" => $description,
                    "product_regular_price" => $regular_price,
                    "product_currency" => $currency
                ];

                $json_encoded_data = json_encode($json_decoded_data);

                $data = [
                    "t_data" => $json_encoded_data,
                    "t_name" => $template_name
                ];

                $this->AdminModel->update_product_template($template_name, $data);
            }
        }




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

            !empty($shipping_fees)           


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
                    'p_tags'               =>  $tags,
                    'p_img'                =>  $img,
                    'p_img_ext'            =>  $img_ext,

                ];

                $this->AdminModel->insert_products($data);
                redirect(base_url('admin_dashboard'));
            } else {

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
                    'p_tags'               =>  $tags,


                ];

                //    print_r('<pre>');
                //    print_r($data);
                $this->AdminModel->insert_products($data);
                redirect('admin/creat/product');
            }
        }
         else {
            $this->session->set_flashdata('err', "Bosluq buraxmayin!");
            redirect($_SERVER['HTTP_REFERER']);
        }
        
    }

    public function edit_product($id)
    {
        $template_name = "product_template";
        $data["product_template"] = $this->AdminModel->get_product_template($template_name);
        $data['get_single_product'] = $this->AdminModel->get_single_product($id);
        $data['categories_list'] = $this->AdminModel->category_get();
        $data['get_subcat'] = $this->AdminModel->get_subcategory();

        $this->load->view('admin/NavbarList/products_creat/edit_product', $data);
    }
    public function edit_product_act($id)
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
        $tags               = $this->input->post('tags', TRUE);

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
                    'p_tags'               =>  $tags,
                    'p_img'                =>  $img,
                    'p_img_ext'            =>  $img_ext,

                ];

                $this->AdminModel->product_update($id, $data);
                redirect(base_url('admin_dashboard'));
            } else {

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
                    'p_tags'               =>  $tags,


                ];

                $this->AdminModel->product_update($id, $data);
                redirect('admin/creat/product');
            }
        } else {

            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete_product($id)
    {
        $this->AdminModel->delete_product($id);
        redirect(base_url('admin/product/list'));
    }
    // CREAT PRODUCT END


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
