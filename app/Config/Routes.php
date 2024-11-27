<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/site/acceuil', 'Acceuil::index');
$routes->get('/site/about', 'Acceuil::about');
$routes->get('/site/classes', 'Acceuil::classes');
$routes->get('/site/contact', 'Acceuil::contact');
$routes->get('/admin', 'Home::index');
$routes->get('auth/register', 'Auth::register'); // Route for the register form
$routes->get('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->post('auth/save_register', 'Auth::save_register'); // Route for processing registration
$routes->post('auth/check_login', 'Auth::check_login');
