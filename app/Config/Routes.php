<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Dashboard sebagai halaman utama
$routes->get('/', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');

// Form Penilaian
$routes->get('/penilaian/form', 'Penilaian::form');
$routes->post('/penilaian/submit', 'Penilaian::submit');

// Admin input unit kerja
$routes->get('/admin-unitkerja', 'AdminUnitKerja::index');
$routes->post('/admin-unitkerja/save', 'AdminUnitKerja::save');

// Tambahan halaman form lain
$routes->get('/teknologi/form', 'Teknologi::form');
$routes->get('/organisasi/form', 'Organisasi::form');

$routes->get('/teknologi/form', 'Teknologi::form');
$routes->post('/teknologi/submit', 'Teknologi::submit');


$routes->get('/organisasi/form', 'Organisasi::form');
$routes->post('/organisasi/submit', 'Organisasi::submit');


$routes->get('/data/form', 'Data::form');
$routes->post('/data/submit', 'Data::submit');


