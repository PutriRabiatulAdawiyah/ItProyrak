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
$routes->get('properties', 'Properties::index');
$routes->get('homeadmin', 'HomeAdmin::index');
$routes->get('datasewa', 'DataSewa::index');
$routes->get('penyewa', 'Penyewa::index');
$routes->post('penyewa/edit', 'Penyewa::edit');
$routes->post('penyewa/hapus', 'Penyewa::hapus');
$routes->get('profil', 'Profil::index');
$routes->post('profil/tambah', 'Profil::tambah');
$routes->post('profil/edit/(:num)', 'Profil::edit/$1');
$routes->get('profil/hapus/(:num)', 'Profil::hapus/$1');
$routes->get('property', 'Property::index');
$routes->post('property/hapus', 'Property::hapus');
$routes->post('property/edit', 'Property::edit');
$routes->get('detailproperty', 'DetailProperty::index');