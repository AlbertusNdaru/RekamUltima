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
$route['default_controller'] = 'welcome';

//Route Admin
$route['Admin'] = 'ControllerAdmin/Login';
$route['admin'] = 'ControllerAdmin/Login';
$route['regadmin'] = 'ControllerAdmin/Reg_admin';
$route['dashboard'] = 'ControllerAdmin/Dashboard';
$route['logout'] = 'ControllerAdmin/Login/logout';

// Route REKAM MEDIS
$route['rekammedis'] = 'Controller_Rekam_Medis/ControllerRekamMedis/get_rekam_medis';

// Route TENAGA MEDIS
$route['tenagamedis'] = 'Controller_TenagaMedis/ControllerMedis/get_tenagamedis';
$route['aksitambahmedis'] = 'Controller_TenagaMedis/ControllerMedis/aksiadd';
$route['tambahtenagamedis'] = 'Controller_TenagaMedis/ControllerMedis/addmedis';
$route['formeditmedis/(:any)'] = 'Controller_TenagaMedis/ControllerMedis/viewFormEditMedis/$1';
$route['editstatusmedis/(:any)/(:any)'] = 'Controller_TenagaMedis/ControllerMedis/editStatusmedis/$1/$2';
$route['deletemedis/(:any)'] = 'Controller_TenagaMedis/ControllerMedis/deletemedis/$1';

// Route HEWAN
$route['hewan'] = 'Controller_Hewan/ControllerHewan/get_hewan';

// Route PEMILIK HEWAN
$route['pemilik_hewan'] = 'Controller_Pemilik/ControllerPemilik/get_pemilik_hewan';

// Route TINDAKAN
$route['tindakan'] = 'Controller_Tindakan/ControllerTindakan/get_tindakan';

// Route LEVEL
$route['level'] = 'Controller_Level/Controller_level/get_level';

// Route LEVEL
$route['penyakit'] = 'Controller_Penyakit/ControllerPenyakit/get_penyakit';


// DLL
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
