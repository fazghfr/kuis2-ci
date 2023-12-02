<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/bioskop/(:num)', 'bioskop::index/$1');

$routes->get('/buy/(:num)', 'film::buy/$1');
$routes->get('/pesan', 'seat::reserve');

$routes->get('/confirm', 'payment::form');
$routes->post('/save', 'payment::savedata');
$routes->post('/pay', 'seat::save');


$routes->get('/about', 'about::index');
$routes->get('/history', 'order::index');
$routes->get('/about/(:num)', 'about::getSpesific/$1');
