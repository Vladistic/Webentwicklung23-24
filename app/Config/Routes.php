<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Start::getIndex');
$routes->get('/Neu', 'Neu::getIndex');
