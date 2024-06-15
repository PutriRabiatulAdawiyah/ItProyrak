<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');
 $routes->get('properties', 'Properties::index');
 $routes->get('detailproperties', 'DetailProperties::index');
 $routes->get('sewaproperties', 'SewaProperties::index');
 $routes->get('adminlogin', 'Login::index');
 $routes->get('userregistrasi', 'Registrasi::index');
 $routes->get('homeadmin', 'HomeAdmin::index');
 $routes->get('datasewa', 'DataSewa::index');

 $routes->get('/profilview', 'Home::profil');
 
 $routes->get('penyewa', 'Penyewa::index');
 $routes->post('penyewa/edit', 'Penyewa::edit');
 $routes->post('penyewa/hapus', 'Penyewa::hapus');

 $routes->get('profil', 'Profil::index');
 $routes->post('profil/tambah', 'Profil::tambah');
 $routes->post('profil/edit', 'Profil::edit');
 $routes->post('profil/hapus', 'Profil::hapus');

$routes->get('property', 'Property::index');
$routes->post('property/tambah', 'Property::tambah');
$routes->post('property/hapus', 'Property::hapus');
$routes->post('property/edit', 'Property::edit');


 $routes->get('detailproperty', 'DetailProperty::index');
 $routes->post('detailproperty/tambah', 'DetailProperty::tambah');
 $routes->post('detailproperty/hapus', 'DetailProperty::hapus');
 $routes->post('detailproperty/edit', 'DetailProperty::edit');

$routes->get('pembayaran', 'Pembayaran::index');

$routes->get('pemesana', 'Pemesanan::index');







// $routes->get('/', 'Home::index');
// $routes->get('properties', 'Properties::index');
// $routes->get('detailproperties', 'DetailProperties::index');
// $routes->get('sewaproperties', 'SewaProperties::index');
// $routes->get('adminlogin', 'Login::index');
// $routes->get('userregistrasi', 'Registrasi::index');
// $routes->get('properties', 'Properties::index'); // Baris ini bisa dihapus jika sudah ada di atas
// $routes->get('homeadmin', 'HomeAdmin::index');
// $routes->get('datasewa', 'DataSewa::index');
// $routes->get('penyewa', 'Penyewa::index');
// $routes->post('penyewa/edit', 'Penyewa::edit');
// $routes->post('penyewa/hapus', 'Penyewa::hapus');
// $routes->get('profil', 'Profil::index');
// $routes->post('profil/tambah', 'Profil::tambah');
// $routes->post('profil/edit', 'Profil::edit');
// $routes->get('profil/hapus', 'Profil::hapus');
// $routes->get('property', 'Property::index');
// $routes->post('property/tambah', 'Property::tambah');
// $routes->post('property/hapus', 'Property::hapus');
// $routes->post('property/edit', 'Property::edit');
// $routes->get('detailproperty', 'DetailProperty::index');
// $routes->post('detailproperty/tambah', 'DetailProperty::tambah');
// $routes->post('detailproperty/hapus', 'DetailProperty::hapus');
// $routes->post('detailproperty/edit', 'DetailProperty::edit');