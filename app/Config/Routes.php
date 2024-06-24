<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('quienes-somos', 'Home::quienesSomos');
$routes->get('acerca-de', 'Home::acercaDe');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('login', 'Home::login');