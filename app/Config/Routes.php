<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/bioskop/(:num)', 'bioskop::index/$1');
$routes->get('/about', 'about::index');
