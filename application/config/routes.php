<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'AdminController/index';
$route['admin/add'] = 'AddController/add_smartphone';
$route['admin/add_airphone'] = 'AddController/add_airphone';
$route['products'] = 'ProductsController/index';
$route['tablets'] = 'ProductsController/tablets';
$route['earphones'] = 'ProductsController/earphone';
$route['laptops'] = 'ProductsController/laptops';
$route['tv'] = 'ProductsController/tv';

//PRODUCT PAGE
$route['product/(:any)'] = 'ProductController/index/$1';
$route['product/tablet/(:any)'] = 'ProductController/tablet/$1';
$route['product/laptop/(:any)'] = 'ProductController/laptop/$1';
$route['product/tv/(:any)'] = 'ProductController/tv/$1';
$route['product/aerphone/(:any)'] = 'ProductController/aerphone/$1';

//VIEW
$route['admin/smartphones'] = 'ViewController/smartphones';
$route['admin/laptop'] = 'ViewController/laptop';
$route['admin/tv'] = 'ViewController/tv';
$route['admin/tablet'] = 'ViewController/tablet';
$route['admin/earphones'] = 'ViewController/earphones';

//EDIT
$route['editsmartphone/(:any)'] = 'EditController/editSmartphone/$1';
$route['editlaptop/(:any)'] = 'EditController/editLaptop/$1';
$route['edittablet/(:any)'] = 'EditController/editTablet/$1';
$route['edittv/(:any)'] = 'EditController/editTV/$1';
$route['editearphone/(:any)'] = 'EditController/editEarphone/$1';

$route['deleteEarphone/(:any)'] = 'DeleteController/earphone/$1';
$route['deleteSmartphone/(:any)'] = 'DeleteController/smartphone/$1';
$route['deleteTablet/(:any)'] = 'DeleteController/tablet/$1';
$route['deleteLaptop/(:any)'] = 'DeleteController/laptop/$1';
$route['deleteTv/(:any)'] = 'DeleteController/tv/$1';
