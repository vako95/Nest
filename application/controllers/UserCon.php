<?php


/**
 * @property UserModel $UserModel,   
 */

class UserCon extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }

    public function index()
    {
        //     $data ['product_list'] =  $this->UserModel->join_cate(array(
        //         "table" => "categories",
        //         "condition" => "categories.c_id = product.p_category",'LEFT',

        //         "table_sub" => "sub_category",
        //         "condition_sub" => "sub_category.s_id = product.p_sub_category",'LEFT'
        //      ),
        //      "product.p_id p_category, categories.c_product_name, categories.parent_id",
        //      "product.p_id p_category, sub_category.s_name, sub_category.s_description"

        //    );


        $data['product_list'] =  $this->UserModel->join_cate(
            array(
                "table" => "categories",
                "condition" => "categories.c_id = product.p_category", 'LEFT',

                "table_sub" => "sub_category",
                "condition_sub" => "sub_category.s_id = product.p_sub_category", 'LEFT'
            ),
            "product.p_id p_category, categories.c_product_name, categories.c_description",
            "product.p_id p_category, sub_category.s_name, sub_category.s_description"

        );


        $this->load->view('user/index', $data);
    }

    public function deals()
    {
        $this->load->view('user/deals');
    }

    public function about()
    {

        $this->load->view('user/about');
    }

    public function contact()
    {

        $this->load->view('user/contact');
    }

    // Shop Nav Menu Start
    public function shop()
    {

        $data['product_list'] =  $this->UserModel->join_cate(
            array(
                "table" => "categories",
                "condition" => "categories.c_id = product.p_category", 'LEFT',

                "table_sub" => "sub_category",
                "condition_sub" => "sub_category.s_id = product.p_sub_category", 'LEFT'
            ),
            "product.p_id p_category, categories.c_product_name, categories.c_description",
            "product.p_id p_category, sub_category.s_name, sub_category.s_description"

        );



        $data["target_slug_products"] = [];

        array_push($data["target_slug_products"], $this->db->get('product')->result());
        $data["categories_list"] = $this->UserModel->get_all_categories();
        $this->load->view('user/navMenu/shop_navbar/shop', $data);
    }


    public function shop_murad()
    {



        $this->load->view('user/navMenu/shop_navbar/shop_murad', $data);
    }

    public function murad_slug($id)
    {

        $data =  $this->UserModel->get_target_murads($id);

        $slug_cate = $this->db->where('c_product_slug', $id)->get('categories')->result();

        $murad_join = $slug_cate[0]->parent_id;
        $cate_ids = explode(';', $murad_join);
        $murad_product = [];
        foreach ($cate_ids as  $cate_ids_key) {
            array_push($murad_product, $this->db->where('p_category', $cate_ids_key)->get('product')->result());
        }
        $data_get_all_murad = $this->UserModel->get_all_murads();



        print_r('<pre>');
        print_r($murad_product);
        die;

        $this->load->view('user/navMenu/shop_navbar/shop_murad', $data);
    }


    public function categories($slug)
    {

        $category_slug_name = $this->db->where("c_product_slug", $slug)->get("categories")->result_array();


        if (empty($category_slug_name) || is_null($category_slug_name)) {
            redirect(base_url("shop"));
        }
        $cate_slug = !is_null(reset($category_slug_name)['parent_id']) ? explode(";", reset($category_slug_name)['parent_id']) : [];
        array_push($cate_slug, reset($category_slug_name)['c_id']);
        $data["target_slug_products"] = [];
        foreach ($cate_slug as $cate_slug_id) {
            array_push($data["target_slug_products"], $this->db->where('p_category', $cate_slug_id)->get('product')->result());
        }



        /* $products_item = $this->db->join("categories","c_id=p_category","left")->get("product")->result(); */

        // $data["target_slug_products"] = $this->db->where("p_category",reset($category_slug_name)['c_id'])->get("product")->result_array();


        $data["categories_list"] = $this->UserModel->get_all_categories();
        // print_r('<pre>');
        // print_r($data["target_slug_products"]);

        // die;
        $this->load->view("user/navMenu/shop_navbar/shop", $data);

        /*         print_r("<pre>");
        print_r($data["target_slug_products"]);
        die(); */
    }





    public function shop_vide()
    {

        $this->load->view('user/navMenu/shop_navbar/shop_wide');
    }
    public function shop_single()
    {

        $this->load->view('user/navMenu/shop_navbar/shop_single');
    }
    public function shop_filter()
    {

        $this->load->view('user/navMenu/shop_navbar/shop_filter');
    }
    public function shop_wishlist()
    {

        $this->load->view('user/navMenu/shop_navbar/shop_wishlist');
    }
    public function shop_product()
    {
        $this->load->view('user/navMenu/shop_navbar/shop_product');
    }
    public function shop_cart()
    {

        $this->load->view('user/navMenu/shop_navbar/shop_cart');
    }
    public function shop_checkout()
    {

        $this->load->view('user/navMenu/shop_navbar/shop_checkout');
    }
    public function shop_compare()
    {

        $this->load->view('user/navMenu/shop_navbar/shop_compare');
    }
    public function shop_invoice()
    {

        $this->load->view('user/navMenu/shop_navbar/shop_invoice');
    }
    // Shop Nav Menu END

    // Vendors Nav Menu Start
    public function vendors_grid()
    {
        $this->load->view('user/navMenu/vendors_navbar/vendors_grid');
    }
    public function vendors_list()
    {
        $this->load->view('user/navMenu/vendors_navbar/vendors_list');
    }
    public function vendors_details()
    {
        $this->load->view('user/navMenu/vendors_navbar/vendors_details');
    }
    public function vendors_dashboard()
    {
        $this->load->view('user/navMenu/vendors_navbar/vendors_dashboard');
    }
    public function vendors_guide()
    {
        $this->load->view('user/navMenu/vendors_navbar/vendors_guide');
    }
    // Vendors Nav Menu END

    // Mega Nav Menu Start
    public function mega_fruit()
    {
        $this->load->view('user/navMenu/mega_navbar/mega_fruit');
    }
    // Mega Nav Menu END

    // Blog Nav Menu Start
    public function blog()
    {
        $this->load->view('user/navMenu/blog_navbar/blog');
    }
    public function blog_single()
    {
        $this->load->view('user/navMenu/blog_navbar/blog_single');
    }
    // Blog Nav Menu END

    // Navbar ACCOUNT TOP
    public function account()
    {
        $this->load->view('user/navPages/login_page/account');
    }
    // Navbar ACCOUNT TOP

    // Login Page Start
    public function login()
    {
        $this->load->view('user/navPages/login_page/login');
    }
    public function page_register()
    {
        $this->load->view('user/navPages/login_page/page_register');
    }
    public function forgot_password()
    {
        $this->load->view('user/navPages/login_page/forgot_password');
    }
    public function reset_password()
    {
        $this->load->view('user/navPages/login_page/reset_password');
    }
    // Login Page Start

    // NavPAGES purchase
    public function purchase()
    {
        $this->load->view('user/navPages/purchase');
    }
    public function privacy_policy()
    {
        $this->load->view('user/navPages/privacy_policy');
    }
    public function terms()
    {
        $this->load->view('user/navPages/terms');
    }
    public function not_found()
    {
        $this->load->view('user/not_found');
    }
    // NavPAGES purchase END


}
