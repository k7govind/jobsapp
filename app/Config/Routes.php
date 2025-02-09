<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/about', 'PagesController::index');
$routes->get('/contact', 'PagesController::index');
$routes->get('/', 'Home::index');

$routes->get('/jobslisting', 'JobsController::index');

