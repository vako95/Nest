<?php
class UserCon extends CI_Controller{

public function index(){

    $this->load->view('user/index');
}
public function deals(){
    $this->load->view('user/deals');
}
public function about(){
    $this->load->view('user/about');
}
public function shop(){
    $this->load->view('navMenu/user/shop_navbar/shop');
}
public function shop_vide(){
    $this->load->view('user/navMenu/shop_navbar/shop_wide');
}
public function shop_single(){
    $this->load->view('user/navMenu/shop_navbar/shop_single');
}
public function shop_filter(){
    $this->load->view('user/navMenu/shop_navbar/shop_filter');
}
public function shop_wishlist(){
    $this->load->view('user/navMenu/shop_navbar/shop_wishlist');
}
public function shop_product(){
    $this->load->view('user/navMenu/shop_navbar/shop_product');
}
public function shop_cart(){
    $this->load->view('user/navMenu/shop_navbar/shop_cart');
}
public function shop_checkout(){
    $this->load->view('user/navMenu/shop_navbar/shop_checkout');
}
public function shop_compare(){
    $this->load->view('user/navMenu/shop_navbar/shop_compare');
}
public function shop_invoice(){
    $this->load->view('user/navMenu/shop_navbar/shop_invoice');
}
// Shop Nav Menu END

// Vendors Nav Menu
public function vendors_grid(){
    $this->load->view('user/navMenu/vendors_navbar/vendors_grid');
}
public function vendors_list(){
    $this->load->view('user/navMenu/vendors_navbar/vendors_list');
}
public function vendors_details(){
    $this->load->view('user/navMenu/vendors_navbar/vendors_list');
}
//  Vendors Nav Menu END 
}