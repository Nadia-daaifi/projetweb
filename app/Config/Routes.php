<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/site/acceuil', 'Home::index');
$routes->get('/site/about', 'Home::about');
$routes->get('/site/classes', 'Home::classes');
$routes->get('/site/contact', 'Home::contact');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/addCoach', 'Admin::addCoach');
$routes->get('auth/register', 'Auth::register'); // Route for the register form
$routes->get('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->post('auth/save_register', 'Auth::save_register'); // Route for processing registration
$routes->post('auth/check_login', 'Auth::check_login');
