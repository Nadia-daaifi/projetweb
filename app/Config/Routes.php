<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/fitheal/acceuil', 'Home::index');
$routes->get('/fitheal/about', 'Home::about');
$routes->get('/fitheal/classes', 'Home::classes');
$routes->get('/fitheal/contact', 'Home::contact');
$routes->get('/fitheal/profil', 'Home::profil');
$routes->post('fitheal/store', 'Home::store');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/calender', 'Admin::calender');
$routes->get('/admin/coach/add', 'Admin::addCoach');
$routes->get('/admin/client/add', 'Admin::addClient');
$routes->get('/admin/coach/show', 'Admin::cliste');
$routes->get('/admin/client/show', 'Admin::Claffiche');
$routes->get('/admin/profil', 'Admin::profil');
$routes->get('auth/register', 'Auth::register'); // Route for the register form
$routes->get('auth/login', 'Auth::login');
$routes->get('admin/deleteCoach/(:num)', 'Admin::deleteCoach/$1');
$routes->get('admin/editCoach/(:num)', 'Admin::editCoach/$1');
$routes->get('admin/deleteClient/(:num)', 'Admin::deleteClient/$1');
$routes->get('admin/editClient/(:num)', 'Admin::editClient/$1');
$routes->get('auth/logout', 'Auth::logout');
$routes->post('auth/save_register', 'Auth::save_register'); // Route for processing registration
$routes->post('auth/check_login', 'Auth::check_login');
// Route pour le formulaire de mot de passe oublié
$routes->get('auth/forgot_password', 'Auth::forgotPassword');

// Route pour traiter le formulaire de réinitialisation du mot de passe
$routes->post('auth/process_forgot_password', 'Auth::processForgotPassword');

$routes->post('/addCoach', 'Auth::add_coach');
$routes->post('admin/updateCoach/(:num)', 'Auth::updateCoach/$1');
$routes->post('/addClient', 'Auth::add_client');
$routes->post('admin/updateClient/(:num)', 'Auth::updateClient/$1');
$routes->get('admin/clients', 'Admin::showClients');
$routes->get('admin/absence/cl', 'Admin::showAbs');
$routes->get('admin/absence/client/(:num)', 'Admin::markAbsence/$1');
$routes->get('admin/absence/co', 'Admin::showAbs_coach');
$routes->get('admin/absence/coach/(:num)', 'Admin::markAbs_coach/$1');
$routes->get('admin/classes', 'Admin::showClasses');
$routes->get('admin/class/add', 'Admin::addClass');
$routes->post('admin/class/save', 'Admin::saveClass');
$routes->get('admin/class/edit/(:num)', 'Admin::editClass/$1');
$routes->post('admin/class/update/(:num)', 'Admin::updateClass/$1');
$routes->get('admin/class/delete/(:num)', 'Admin::deleteClass/$1');





