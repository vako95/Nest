<?php
class UserCon extends CI_Controller
{

    public function index()
    {

        $this->load->view('user/index');
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

        $this->load->view('user/navMenu/shop_navbar/shop');
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
