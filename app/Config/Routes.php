<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/autenticador', 'Home::autenticador');
$routes->get('/home', 'Home::index');
$routes->get('/testedb', 'Home::testeDB');

service('auth')->routes($routes);

