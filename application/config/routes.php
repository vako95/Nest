<?php
defined('BASEPATH') OR exit('No direct script access allowed');
                                  //USER CONTROLLER START
$route['home'] = "UserCon/index";
$route['deals'] = "UserCon/deals";
$route['about'] = "UserCon/about";
$route['contact'] = "UserCon/contact";

// Shop Nav Menu Start
$route['shop'] = "UserCon/shop";
$route['shop_murad'] = "UserCon/shop_murad";

$route["shop/categories/(:any)"] = "UserCon/categories/$1";
$route["shop/murad/(:any)"] = "UserCon/murad_slug/$1";


$route['shop_wide'] = "UserCon/shop_wide";
$route['shop_single'] = "UserCon/shop_single";
$route['shop_filter'] = "UserCon/shop_filter";
$route['shop_wishlist'] = "UserCon/shop_wishlist";
$route['shop_product'] = "UserCon/shop_product";
$route['shop_cart'] = "UserCon/shop_cart";
$route['shop_checkout'] = "UserCon/shop_checkout";
$route['shop_compare'] = "UserCon/shop_compare";
$route['shop_invoice'] = "UserCon/shop_invoice";
// Shop Nav Menu END

// Vendors Nav Menu Start
$route['vendors_grid'] = "UserCon/vendors_grid";
$route['vendors_list'] = "UserCon/vendors_list";
$route['vendors_details'] = "UserCon/vendors_details";
$route['vendors_dashboard'] = "UserCon/vendors_dashboard";
$route['vendors_guide'] = "UserCon/vendors_guide";
// Vendors Nav Menu END

// Mega Nav Menu Start
$route['mega_fruit'] = "UserCon/mega_fruit";
// Mega Nav Menu End

// Blog Nav Menu Start
$route['blog'] = "UserCon/blog";
$route['blog_single'] = "UserCon/blog_single";
//Blog Nav Menu End

// Accoun Page Start
$route['account'] = "UserCon/account";
// Accoun Page Start

// Login Page Start
$route['login'] = "UserCon/login";
$route['page_register'] = "UserCon/page_register";
$route['forgot_password'] = "UserCon/forgot_password";
$route['reset_password'] = "UserCon/reset_password";
$route['login'] = "UserCon/login";
// Login Page END

// NavPAGES purchase
$route['purchase'] = "UserCon/purchase";
$route['privacy_policy'] = "UserCon/privacy_policy";
$route['terms'] = "UserCon/terms";
// NavPAGES purchase                 
                                 //USER CONTROLLER END

//ADMIN CONTROLLER START ADMIN CONTROLLER START ADMIN CONTROLLER START

$route['admin/dashboard'] = "AdminCon/dashboard";                                
$route['admin/product/list'] = "AdminCon/product_list";                                
$route['admin_categories'] = "AdminCon/product_categories";
$route['admin/product/categories/act'] = "AdminCon/product_categories_act";

$route['admin/sub/categories'] = "AdminCon/sub_categories";
$route['admin/sub/categories/act'] = "AdminCon/sub_categories_act";

//TESTTTTT
$route['admin/categories/test'] = "AdminCon/product_categories_test";
$route['admin/product/categories/act/test'] = "AdminCon/product_categories_act_test";

//TESTTTTT
//ORDERS
$route['admin_order'] = "AdminCon/order_list"; 
$route['admin_order_detail'] = "AdminCon/order_detail"; 

//SELLERS
$route['admin_sellers'] = "AdminCon/sellers_list"; 
$route['admin_sellers_profile'] = "AdminCon/sellers_profile";

    //CREAT PRODUCT
$route['admin/creat/product'] = "AdminCon/creat_product";
$route['admin_creat_product_act'] = "AdminCon/creat_product_act";
// update
$route['admin/edit/product/(.*)'] = "AdminCon/edit_product/$1";
$route['admin/edit/product/act/(:any)'] = "AdminCon/edit_product_act/$1";
$route['admin/delete/product/(.*)'] = "AdminCon/delete_product/$1";

//Others FROM NAVBAR LIST
$route['admin_transactions'] = "AdminCon/transactions";

//LOGIN PAGE
$route['admin_login'] = "AdminCon/user_login";
$route['admin_registr'] = "AdminCon/user_registr";
$route['admin_not_found'] = "AdminCon/not_found";

//OTHERS PAGE
$route['admin_reviews'] = "AdminCon/reviews";
$route['admin_brands'] = "AdminCon/brands";
$route['admin_profile_setting'] = "AdminCon/profile_setting";
$route['admin_site_setting'] = "AdminCon/site_setting";
$route['admin_starter_page'] = "AdminCon/starter_page";






                            //ADMIN CONTROLLER END





$route['not_found'] = "UserCon/not_found";
$route['default_controller'] = 'UserCon/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

