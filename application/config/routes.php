<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';
$route['verifylogin'] = 'verifylogin';
$route['admin'] = 'admin/index';
$route['addnew'] = 'admin/create';
$route['admin/news/(:num)/delete'] = 'admin/delete/$1';
$route['admin/news/(:num)'] = 'admin/edit/$1';

$route['(:any)'] = 'welcome/view/$1';
$route['default_controller'] = 'welcome/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
