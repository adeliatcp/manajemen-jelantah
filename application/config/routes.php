<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'Home';

/** --------- routes admin -------------- */
$route['admin/dashboard'] = 'admin/Dashboard';
$route['admin'] = 'admin/Dashboard';


/** --------- routes user -------------- */
$route['user/dashboard'] = "user/Dashboard";
$route['user'] = "user/Dashboard";
$route['user/device/edit/(:any)'] = 'user/Device/editdevice/$1';



/** --------- routes pengepul -------------- */
$route['pengepul/dashboard'] = "pengepul/Dashboard";
$route['pengepul'] = "pengepul/Dashboard";


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// belajar routing expert CI 3 disini
// https://www.mahadisuta.com/artikel/penerapan-url-routing-pada-framework-codeigniter


/**
 * konsep dasarnya menurut artikel itu:
 * $route['nama route baru'] = 'NamaController/nama-function';
 * 
 * bagaimana kalau url nya menerima parameter / query?
 * http://spmj.com/device/1
 * $route['device/(:num)'] = 'NamaController/nama-function/$1';
 * 
 * di controller nanti jadi :
 * function nama-function($id_device){
 *      --- baris code utk memproses termasuk return view
 * }
 * 
 * https://codeigniter.com/userguide3/general/routing.html
 * 
 * 
 * 
 * nah bagaimana kalau controller di dalam sebuah folder lagi?
 * biasa aja:
 * $route['user/device/(:num)'] = 'NamaFolder/NamaController/nama-function/$1';
 * 
 * selamat mencoba sampai berhasil
 */
