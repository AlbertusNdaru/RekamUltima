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
$route['Admin']                 = 'ControllerAdmin/Login';
$route['admin']                 = 'ControllerAdmin/Login';
$route['regadmin']              = 'ControllerAdmin/Reg_admin';
$route['dashboard']             = 'ControllerAdmin/Dashboard';
$route['logout']                = 'ControllerAdmin/Login/logout';
$route['editprofile/(:any)']    = 'ControllerAdmin/Profil/vieweditprofil/$1';

//Route Laporan
$route['LaporanHewan']  = 'Controller_report/Controller_report/report_Hewan';
$route['LaporanRekam']  = 'Controller_report/Controller_report/report_RekamMedis';
$route['LaporanKritik']  = 'Controller_report/Controller_report/report_Kritik';

//Route Halaman Pemilik
$route['landing']                   = 'Controller_landingpage/Controller_landingpage/landingpage';
$route['loginuser']                 = 'Controller_landingpage/Controller_landingpage/loginuser';
$route['registeruser']              = 'Controller_landingpage/Controller_landingpage/registeruser';
$route['logoutuser']                = 'Controller_landingpage/Controller_landingpage/logoutuser';
$route['edituser']                  = 'Controller_landingpage/Controller_landingpage/vieweditprofile';
$route['editpassword']              = 'Controller_landingpage/Controller_landingpage/vieweditpassword';
$route['registerhewan']             = 'Controller_landingpage/Controller_landingpage/register_hewan';
$route['Viewedithewan/(:any)']      = 'Controller_landingpage/Controller_landingpage/Viewedithewan/$1';
$route['datahewan/(:any)']          = 'Controller_landingpage/Controller_landingpage/rekammedis/$1';
$route['rekammedisdetail/(:any)']   = 'Controller_landingpage/Controller_landingpage/ViewPDFRekam/$1';

// Route REKAM MEDIS
$route['rekammedis']        = 'Controller_Rekam_Medis/ControllerRekamMedis/get_rekam_medis';
$route['detailrekammedis/(:any)']        = 'Controller_Rekam_Medis/ControllerRekamMedis/get_detail_rekam_medis/$1';
$route['viewTambah/(:any)'] = 'Controller_Rekam_Medis/ControllerRekamMedis/viewTambahdataRekamMedis/$1';
$route['addDetailMedis']    = 'Controller_Rekam_Medis/ControllerRekamMedis/addDetailRM';

// Route Kritik
$route['kritik']                = 'Controller_Kritik/ControllerKritik/get_kritik';
$route['kritik_admin']           = 'ControllerAdmin/Dashboard/get_kritik_admin';
$route['aksitambahkritik']      = 'Controller_Kritik/ControllerKritik/aksiadd';
$route['deletekritik']          = 'Controller_Kritik/ControllerKritik/deletekritik';

// Route TENAGA MEDIS
$route['tenagamedis']                   = 'Controller_TenagaMedis/ControllerMedis/get_tenagamedis';
$route['aksitambahmedis']               = 'Controller_TenagaMedis/ControllerMedis/aksiadd';
$route['tambahtenagamedis']             = 'Controller_TenagaMedis/ControllerMedis/addmedis';
$route['formeditmedis/(:any)']          = 'Controller_TenagaMedis/ControllerMedis/viewFormEditMedis/$1';
$route['editstatusmedis/(:any)/(:any)'] = 'Controller_TenagaMedis/ControllerMedis/editStatusmedis/$1/$2';
$route['deletemedis/(:any)']            = 'Controller_TenagaMedis/ControllerMedis/deletemedis/$1';

// Route HEWAN
$route['hewan']                         = 'Controller_Hewan/ControllerHewan/get_hewan';
$route['aksitambahhewan']               = 'Controller_Hewan/ControllerHewan/aksiadd';
$route['tambahhewan']                   = 'Controller_Hewan/ControllerHewan/addhewan';
$route['formedithewan/(:any)']          = 'Controller_Hewan/ControllerHewan/viewFormEdithewan/$1';
$route['editstatushewan/(:any)/(:any)'] = 'Controller_Hewan/ControllerHewan/editstatushewan/$1/$2';
$route['deletehewan/(:any)']            = 'Controller_Hewan/ControllerHewan/deletehewan/$1';

// Route PEMILIK HEWAN
$route['pemilik']                         = 'Controller_Pemilik/ControllerPemilik/get_pemilik_hewan';
$route['aksitambahpemilik']               = 'Controller_Pemilik/ControllerPemilik/aksiadd';
$route['tambahpemilik']                   = 'Controller_Pemilik/ControllerPemilik/addpemilik';
$route['formeditpemilik/(:any)']          = 'Controller_Pemilik/ControllerPemilik/viewFormEditPemilik/$1';
$route['editstatuspemilik/(:any)/(:any)'] = 'Controller_Pemilik/ControllerPemilik/editstatuspemilik/$1/$2';
$route['deletepemilik/(:any)']            = 'Controller_Pemilik/ControllerPemilik/deletepemilik/$1';

// Route TINDAKAN
$route['tindakan']                  = 'Controller_Tindakan/ControllerTindakan/get_tindakan';
$route['aksitambahtindakan']        = 'Controller_Tindakan/ControllerTindakan/aksiadd';
$route['tambahtindakan']            = 'Controller_Tindakan/ControllerTindakan/addtindakan';
$route['formedittindakan/(:any)']   = 'Controller_Tindakan/ControllerTindakan/viewFormEditTindakan/$1';
$route['deletetindakan/(:any)']     = 'Controller_Tindakan/ControllerTindakan/deletetindakan/$1';

// Route LEVEL
$route['level']                     = 'Controller_Level/Controller_level/get_level';
$route['aksitambahlevel']           = 'Controller_Level/Controller_level/aksiadd';
$route['tambahlevel']               = 'Controller_Level/Controller_level/addlevel';
$route['formeditlevel/(:any)']      = 'Controller_Level/Controller_level/viewFormEditLevel/$1';
$route['deletelevel/(:any)']        = 'Controller_Level/Controller_level/deletlevel/$1';

// Route LEVEL
$route['penyakit']                  = 'Controller_Penyakit/ControllerPenyakit/get_penyakit';
$route['aksitambahpenyakit']        = 'Controller_Penyakit/ControllerPenyakit/aksiadd';
$route['tambahpenyakit']            = 'Controller_Penyakit/ControllerPenyakit/addpenyakit';
$route['formeditpenyakit/(:any)']   = 'Controller_Penyakit/ControllerPenyakit/viewFormEditPenyakit/$1';
$route['deletepenyakit/(:any)']     = 'Controller_Penyakit/ControllerPenyakit/deletepenyakit/$1';


// DLL
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
