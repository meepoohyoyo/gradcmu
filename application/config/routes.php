<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';
$route['verifylogin'] = 'verifylogin';
$route['admin'] = 'welcome/admin';

$route['(:any)'] = 'welcome/view/$1';
$route['default_controller'] = 'welcome/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
