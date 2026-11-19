
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// HALAMAN DASHBOARD
$routes->get('/', 'Dashboard::index');

// DATA PENGELUARAN
$routes->get('pengeluaran', 'Pengeluaran::index');
$routes->get('pengeluaran/create', 'Pengeluaran::create');
$routes->post('pengeluaran/store', 'Pengeluaran::store');
$routes->get('pengeluaran/edit/(:num)', 'Pengeluaran::edit/$1');
$routes->post('pengeluaran/update/(:num)', 'Pengeluaran::update/$1');
$routes->post('pengeluaran/delete/(:num)', 'Pengeluaran::delete/$1');

// DATA PEMASUKAN
$routes->get('pemasukan', 'Pemasukan::index');
$routes->get('pemasukan/create', 'Pemasukan::create');
$routes->post('pemasukan/store', 'Pemasukan::store');
$routes->get('pemasukan/edit/(:num)', 'Pemasukan::edit/$1');
$routes->post('pemasukan/update/(:num)', 'Pemasukan::update/$1');
$routes->post('pemasukan/delete/(:num)', 'Pemasukan::delete/$1');
