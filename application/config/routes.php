<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'BarangController/index';

$route['manajemen-barang'] = 'BarangController';
$route['login']['get'] = 'UserController/login';
$route['login']['post'] = 'UserController/setlogin';
$route['logout'] = 'UserController/logout';
$route['log-aktivitas'] = 'ActivityController';
$route['register'] = 'UserController/register';



// ================================

$route['profiler'] = "Profiler_controller"; 
$route['profiler/disable'] = "Profiler_controller/disable";

// ================================
$route['404_override'] = 'UtilsController/load404';
$route['translate_uri_dashes'] = FALSE;