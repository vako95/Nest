<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['home'] = "UserCon/index";
$route['deals'] = "UserCon/deals";
$route['about'] = "UserCon/about";
$route['contact'] = "UserCon/contact";

// Shop Nav Menu Start
$route['shop'] = "UserCon/shop";
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




$route['not_found'] = "UserCon/not_found";
$route['default_controller'] = 'UserCon/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

