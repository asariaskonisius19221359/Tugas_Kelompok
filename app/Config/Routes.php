<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/anggota', 'AnggotaController::show');
$routes->get('/anggota,form', 'AnggotaController::form');
$routes->post('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('/anggota/Save', 'AnggotaController::create');

$routes->get('/pengguna', 'PenggunaController::show');
$routes->get('/anggota,form', 'PenggunaController::form');
$routes->get('/pengguna/edit/(:num)', 'PenggunaController::edit/$1');
$routes->post('/kategori/form', 'KatagoriController::form');

$routes->get('/kategori', 'KatagoriController::show');
$routes->get('/kategori/form', 'KatagoriController::form');
$routes->get('/kategori/edit/(:num)', 'KatagoriController::edit/$1');
$routes->post('/kategori/save', 'KatagoriController::create');

$routes->get('/koleksibuku', 'KoleksiController::show');
$routes->get('/koleksibuku/form', 'KoleksiController::form');
$routes->get('/koleksibuku/edit/(:num)', 'KoleksiController::edit/$1');
$routes->post('/koleksibuku/save', 'KoleksiController::create');

$routes->get('/buku', 'BukuController::show');
$routes->get('/buku/form', 'BukuController::form');
$routes->get('/buku/edit/(:num)', 'BukuController::edit/$1');
$routes->get('/buku/save', 'BukuController::create');

$routes->get('/peminjaman', 'PaminjamanController::show');
$routes->get('/peminjaman/form', 'PeminjamanController::form');
$routes->get('/peminjaman/edit/(:num)', 'PeminjamanController::edit/$1');
$routes->post('/peminjaman/save', 'PeminjamanController::create');

$routes->get('/penerbit', 'PenerbitController::show');
$routes->get('/penerbit/form', 'PenerbitController::form');
$routes->get('/penerbit/edit/(:num)', 'PenerbitController::edit/$1');
$routes->post('/penerbit/save', 'PenerbitController::create');

$routes->get('/login', 'LoginController::form');
$routes->get('/login', 'LoginController::login');
$routes->get('/logout', 'LoginController::logout');