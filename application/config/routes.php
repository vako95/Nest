<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['home'] = "UserCon/index";
$route['deals'] = "UserCon/deals";
$route['about'] = "UserCon/about";

$route['default_controller'] = 'UserCon/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
