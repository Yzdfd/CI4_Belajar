<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/home', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');
$routes->get('/komik', 'Komik::index');
// $routes->get('/coba/(:segment)', 'Coba::index/$1');
// $routes->get('/coba/(:any)/(:any)', 'Coba::tes/$1/$2');
// $routes->get('/coba/(:segment)/(:num)', 'Coba::index/$1/$2');

// Routes punya etmin
// $routes->get('/users', 'Admin\Users::index');