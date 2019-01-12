<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//bagian backend
$route['default_controller'] = "Home";
$route['Dashbard/index'] = "Dashboard";
//$route['kategori/data_kategori'] = 'kategori/data_kategori';
$route['(:any)']='tempat/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;