<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'frontend/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Frontend */
$route['search'] = 'frontend/search';
$route['search/(alat|bahan)'] = 'frontend/search/only_type/$1';
$route['search/(alat|bahan)/page/(:num)'] = 'frontend/search/only_type/$1/$2';
$route['search/(alat|bahan)/(:any)'] = 'frontend/search/with_keyword/$1/$2';
$route['search/(alat|bahan)/(:any)/page/(:num)'] = 'frontend/search/with_keyword/$1/$2/$3';
$route['(alat|bahan)/([0-9]+-[^/]+)'] = 'frontend/detail/index/$1/$2';
$route['(alat|bahan)/([0-9]+-[^/]+)/store'] = 'frontend/detail/store/$1/$2';
$route['profil'] = 'frontend/profil';
$route['ketentuan'] = 'frontend/ketentuan';
$route['jadwal'] = 'frontend/jadwal';
$route['jadwal/page/(:num)'] = 'frontend/jadwal/index/$1';
$route['denah'] = 'frontend/denah';
$route['kontak'] = 'frontend/kontak';
$route['checkout/(:any)'] = 'frontend/checkout/index/$1';
$route['checkout/delete/(:any)'] = 'frontend/checkout/delete/$1';
$route['checkout/store/(:any)'] = 'frontend/checkout/store/$1';
$route['login'] = 'frontend/auth/login';
$route['login/me'] = 'frontend/auth/validation';
$route['logout'] = 'frontend/auth/logout';

/* PDF Page */
$route['lampiran/uid/(:num).pdf'] = 'frontend/checkout/create_pdf/$1';

/* Admin Dashboard */
$route['dashboard'] = 'admin/dashboard';

$route['dashboard/alat-baru'] = 'admin/alat/baru';
$route['dashboard/alat-semua'] = 'admin/alat/semua';
$route['dashboard/alat-baru/store'] = 'admin/alat/store';
$route['dashboard/alat-edit/(:num)'] = 'admin/alat/edit/$1';
$route['dashboard/alat-patch'] = 'admin/alat/patch';
$route['dashboard/alat-hapus'] = 'admin/alat/destroy';

$route['dashboard/bahan-baru'] = 'admin/bahan/baru';
$route['dashboard/bahan-semua'] = 'admin/bahan/semua';
$route['dashboard/bahan-baru/store'] = 'admin/bahan/store';
$route['dashboard/bahan-edit/(:num)'] = 'admin/bahan/edit/$1';
$route['dashboard/bahan-patch'] = 'admin/bahan/patch'; 
$route['dashboard/bahan-hapus'] = 'admin/bahan/destroy';

$route['dashboard/konfirmasi-peminjaman'] = 'admin/konfirmasi/peminjaman';
$route['dashboard/konfirmasi-peminjaman/(alat|bahan)/(:num)'] = 'admin/konfirmasi/lihat/$1/$2';
$route['dashboard/konfirmasi-pengembalian'] = 'admin/konfirmasi/pengembalian';
$route['dashboard/edit-peminjam-ajax'] = 'admin/konfirmasi/edit_peminjam_ajax';
$route['dashboard/edit-peminjam-ajax/save'] = 'admin/konfirmasi/edit_peminjam_ajax_save';
$route['dashboard/konfirmasi-terima'] = 'admin/konfirmasi/confirm_terima';
$route['dashboard/konfirmasi-tolak'] = 'admin/konfirmasi/confirm_tolak';
$route['dashboard/konfirmasi-kembali'] = 'admin/konfirmasi/confirm_kembali';

$route['dashboard/penjadwalan-baru'] = 'admin/penjadwalan/baru';
$route['dashboard/penjadwalan-semua'] = 'admin/penjadwalan/semua';
$route['dashboard/penjadwalan-baru/store'] = 'admin/penjadwalan/store';
$route['dashboard/penjadwalan-edit/(:num)'] = 'admin/penjadwalan/edit/$1';
$route['dashboard/penjadwalan-patch'] = 'admin/penjadwalan/patch';
$route['dashboard/penjadwalan-hapus'] = 'admin/penjadwalan/destroy';

$route['dashboard/daftar-peminjam'] = 'admin/dashboard/daftar_peminjam';

$route['dashboard/web-image'] = 'admin/websettings/image';
$route['dashboard/web-image/store'] = 'admin/websettings/image_store';

$route['dashboard/web-laboratorium'] = 'admin/websettings/laboratorium';
$route['dashboard/web-laboratorium/store'] = 'admin/websettings/laboratorium_store';

$route['dashboard/web-home-content'] = 'admin/websettings/home_content';
$route['dashboard/web-home-content/store'] = 'admin/websettings/home_content_store';

$route['dashboard/web-footer'] = 'admin/websettings/web_footer';
$route['dashboard/web-footer/store'] = 'admin/websettings/web_footer_store';

$route['dashboard/user-settings'] = 'admin/dashboard/user_settings';
$route['dashboard/user-settings/store/info'] = 'admin/dashboard/user_settings_store';
$route['dashboard/user-settings/store/password'] = 'admin/dashboard/user_password_store';

$route['dashboard/stok'] = 'admin/stok/baru';
$route['dashboard/stok/alat'] = 'admin/stok/stok_alat';
$route['dashboard/stok/bahan'] = 'admin/stok/stok_bahan';
$route['dashboard/stok-alat/store'] = 'admin/stok/store_alat';
$route['dashboard/stok-bahan/store'] = 'admin/stok/store_bahan';



$route['dashboard/laporan-alat'] = 'admin/laporan/alat';
$route['dashboard/laporan-alat'] = 'admin/laporan/semuaalat';
$route['dashboard/filter-alat'] = 'admin/laporan/filter_alat';

$route['dashboard/laporan-bahan'] = 'admin/laporan/bahan';
$route['dashboard/laporan-bahan'] = 'admin/laporan/semuabahan';
$route['dashboard/filter-bahan'] = 'admin/laporan/filter_bahan';


$route['dashboard/laporan-transaksi'] = 'admin/laporan/transaksi';
$route['dashboard/laporan-transaksi'] = 'admin/laporan/lap_transaksi';
$route['dashboard/filter-transaksi'] = 'admin/laporan/filter_transaksi';



$route['dashboard/suratbebas-baru'] = 'admin/suratbebas/baru';
$route['dashboard/suratbebas-semua'] = 'admin/suratbebas/semua';
$route['dashboard/suratbebas-baru/store'] = 'admin/suratbebas/store';
$route['dashboard/suratbebas-edit/(:num)'] = 'admin/suratbebas/edit/$1';
$route['dashboard/suratbebas-patch'] = 'admin/suratbebas/patch';
$route['dashboard/suratbebas-hapus'] = 'admin/suratbebas/destroy';

/* PDF Page */
$route['dashboard/suratbebas/uid/(:num).pdf'] = 'admin/suratbebas/create_pdf/$1';

$route['dashboard/peminjaman'] = 'admin/surat/peminjaman';
$route['dashboard/peminjaman/store'] = 'admin/surat/peminjaman_store';


