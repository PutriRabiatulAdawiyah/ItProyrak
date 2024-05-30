<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('properties', 'Properties::index');
$routes->get('homeadmin', 'HomeAdmin::index');
$routes->get('datasewa', 'DataSewa::index');
$routes->get('profil', 'Profil::index');