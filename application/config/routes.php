<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//login route
$route['logout'] = 'login/logout';

//master route
$route['master/upah/input'] = 'master_upah/input_upah';
$route['master/upah'] = 'master_upah/data_upah';
$route['master/cabang'] = 'master_cabang/data_cabang';
$route['master/upah/update/(:num)'] = 'master_upah/update/$1';
//tingkatan upah
$route['master/tingkatan'] = 'master_tingkatan/data_tingkatan';
$route['master/tingkatan/update/(:num)'] = 'master_tingkatan/update/$1';
$route['master/tingkatan/hapus/(:num)'] = 'master_tingkatan/hapus/$1';
$route['master/tingkatan/input'] = 'master_tingkatan/input';
//kategori bagian
$route['master/kategori'] = 'Master_kategori_bagian/data_kategori';
$route['master/kategori/get'] = 'Master_kategori_bagian/getKategori';
$route['master/kategori/update/(:num)'] = 'Master_kategori_bagian/update/$1';
$route['master/kategori/hapus/(:num)'] = 'Master_kategori_bagian/hapus/$1';
$route['master/kategori/input'] = 'Master_kategori_bagian/input';
//master bagian
$route['master/bagian'] = 'Master_bagian/data_bagian';
$route['master/bagian/get'] = 'Master_bagian/getbagian';
$route['master/bagian/update/(:num)'] = 'Master_bagian/update/$1';
$route['master/bagian/hapus/(:num)'] = 'Master_bagian/hapus/$1';
$route['master/bagian/input'] = 'Master_bagian/input';
//master jabatan
$route['master/jabatan'] = 'master_jabatan/data_jabatan';
$route['master/jabatan/get'] = 'master_jabatan/getJabatan';
$route['master/jabatan/update/(:num)'] = 'master_jabatan/update/$1';
$route['master/jabatan/hapus/(:num)'] = 'master_jabatan/hapus/$1';
$route['master/jabatan/input'] = 'master_jabatan/input';
//interview route
//ktp
$route['interview/ktp/input'] = 'biodata_ktp/input';
$route['interview/ktp/input/(:num)'] = 'biodata_ktp/input/$1';
$route['interview/ktp/update/(:num)'] = 'biodata_ktp/update/$1';
//profile
$route['interview/profile/input'] = 'biodata_profile/input';
$route['interview/profile/input/(:num)'] = 'biodata_profile/input/$1';
//referensi
$route['interview/referensi/input'] = 'biodata_referensi/input';
$route['interview/referensi/input/(:num)'] = 'biodata_referensi/input/$1';
//domisili
$route['interview/domisili/input'] = 'biodata_domisili/input';
$route['interview/domisili/input/(:num)'] = 'biodata_domisili/input/$1';
//keluarga
$route['interview/keluarga/input'] = 'biodata_keluarga/input';
$route['interview/keluarga/input/(:num)'] = 'biodata_keluarga/input/$1';
//kehamilan
$route['interview/kehamilan/input'] = 'biodata_kehamilan/input';
$route['interview/kehamilan/input/(:num)'] = 'biodata_kehamilan/input/$1';
//darurat
$route['interview/darurat/input'] = 'biodata_darurat/input';
$route['interview/darurat/input/(:num)'] = 'biodata_darurat/input/$1';
//orang tua
$route['interview/ortu/input'] = 'biodata_ortu/input';
$route['interview/ortu/input/(:num)'] = 'biodata_ortu/input/$1';
//wali
$route['interview/wali/input'] = 'biodata_wali/input';
$route['interview/wali/input/(:num)'] = 'biodata_wali/input/$1';
$route['interview/wali/simpan/(:num)'] = 'biodata_wali/simpan/$1';
//susunan anak
$route['interview/susunan_anak/input'] = 'biodata_susunan_anak/input';
$route['interview/susunan_anak/input/(:num)'] = 'biodata_susunan_anak/input/$1';
//pendididikan
$route['interview/pendidikan/input'] = 'biodata_pendidikan/input';
$route['interview/pendidikan/input/(:num)'] = 'biodata_pendidikan/input/$1';
$route['interview/pendidikan/simpan/(:num)'] = 'biodata_pendidikan/simpan/$1';
//pengalaman
$route['interview/pengalaman/input'] = 'biodata_pengalaman/input';
$route['interview/pengalaman/update'] = 'biodata_pengalaman/update';
$route['interview/pengalaman/input/(:num)'] = 'biodata_pengalaman/input/$1';
$route['interview/pengalaman/simpan/(:num)'] = 'biodata_pengalaman/simpan/$1';
$route['interview/pengalaman/simpan/(:num)/(:num)'] = 'biodata_pengalaman/simpan/$1/$2';
$route['interview/pengalaman/update/(:num)/(:num)'] = 'biodata_pengalaman/update/$1/$2';
$route['interview/pengalaman/hapus/(:num)/(:num)'] = 'biodata_pengalaman/hapus/$1/$2';
//interview
$route['interview/input'] = 'biodata_interview/input';
$route['interview/input/(:num)'] = 'biodata_interview/input/$1';
//minat kerja
$route['interview/minat/input'] = 'biodata_minat/input';
$route['interview/minat/input/(:num)'] = 'biodata_minat/input/$1';
$route['interview/minat/simpan/(:num)'] = 'biodata_minat/simpan/$1';
//data interview
$route['interview/lihat'] = 'interview_cadangan';
$route['interview/detail/(:num)'] = 'interview_cadangan/lihat/$1';
$route['pengiriman/input'] = 'interview_cadangan/pengiriman';
$route['pengiriman'] = 'interview_pengiriman';
$route['pengiriman/get'] = 'interview_pengiriman/getPengiriman';
$route['pengiriman/batal/(:num)'] = 'interview_pengiriman/batal/$1';
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
