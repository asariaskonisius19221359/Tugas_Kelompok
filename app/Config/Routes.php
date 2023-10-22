<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');

$routes->get('/anggota', 'AnggotaController::show');
$routes->get('/anggota/form', 'AnggotaController::form');
$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->get('/anggota/Save', 'AnggotaController::create');

$routes->get('/pengguna', 'PenggunaController::show');
$routes->get('/pengguna', 'PenggunaController::form');
$routes->post('/pengguna/edit/(:num)', 'PenggunaController::edit/$1');
$routes->get('/pengguna/Save', 'PenggunaController::create');

$routes->get('/kategori', 'KategoriController::show');
$routes->get('/kategori', 'KategoriController::form');
$routes->post('/kategori/edit/(:num)', 'KategoriController::edit/$1');
$routes->get('/kategori/Save', 'KategoriController::create');

$routes->get('/koleksibuku', 'KoleksiBukuController::show');
$routes->get('/koleksibuku', 'KoleksiBukuController::form');
$routes->post('/koleksibuku/edit/(:num)', 'KoleksiBukuController::edit/$1');
$routes->get('/koleksibuku/Save', 'KoleksiBukuController::create');

$routes->get('/buku', 'BukuController::show');
$routes->get('/buku', 'BukuController::form');
$routes->post('/buku/edit/(:num)', 'BukuController::edit/$1');
$routes->get('/buku/Save', 'BukuController::create');

$routes->get('/peminjaman', 'PeminjamanController::show');
$routes->get('/peminjaman', 'PeminjamanController::form');
$routes->post('/peminjamam/edit/(:num)', 'PeminjamanController::edit/$1');
$routes->get('/peminjaman/Save', 'PeminjamanController::create');

$routes->get('/penerbit', 'PenerbitController::show');
$routes->get('/penerbit', 'PenerbitController::form');
$routes->post('/penerbit/edit/(:num)', 'PenerbitController::edit/$1');
$routes->get('/penerbit/Save', 'PenerbitController::create');

$routes->get('/login', 'LoginController::form');
$routes->post('/login', 'LoginController::login');
$routes->get('/logout', 'LoginController::logout');