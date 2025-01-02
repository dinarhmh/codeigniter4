<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Dashboard::index', ['filters' => 'auth']);
$routes->setAutoRoute(true);

$routes->get('/contact', 'ContactController::index');
$routes->add('/contact', 'ContactController::create');
$routes->add('/contact/edit/(:segment)', 'ContactController::edit/$1');
$routes->get('contact/delete/(:segment)', 'ContactController::delete/$1');
