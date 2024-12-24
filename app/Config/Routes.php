<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');


$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)', 'Home::image/$1');

$routes->group('admin', ['filter' => ['group:admin']], function($routes){
  
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');

    $routes->get('daftar-softcase', 'AdminController::daftarsoftcase');
    $routes->get('daftar-softcase/tambah', 'AdminController::daftarsoftcaseTambah');
    $routes->post('daftar-softcase/create', 'AdminController::createsoftcase');
    $routes->get('daftar-softcase/edit', 'AdminController::daftarsoftcaseEdit');
    $routes->get('daftar-softcase/hapus', 'AdminController::daftarsoftcaseHapus');

    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');

    $routes->get('pelanggan', 'AdminController::pelanggan');

    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');


});



service('auth')->routes($routes);