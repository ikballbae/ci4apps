<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/latihan1', 'Home::latihan1');
$routes->get('/latihan2', 'Latihan2::index');
$routes->get('/latihan2/(:any)', 'Latihan2::about/$1');
$routes->get('contoh', to: function () {
    echo "ini adalah route contoh anonymous function";
});

$routes->get('/login', 'Admin\Login::index');
$routes->get('/pages/home', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/pages/produk', 'ProdukController::index');
$routes->get('/pages/produk/detail/(:any)', 'ProdukController::detail/$1');
$routes->get('/pages/input', 'ProdukController::input');
$routes->post('/produk/simpan', 'ProdukController::simpan');
$routes->get('/pages/produk/edit/(:any)', 'ProdukController::edit/$1');
$routes->post('/produk/update', 'ProdukController::update');
$routes->get('/pages/produk/delete/(:any)', 'ProdukController::delete/$1');