<?php

use CodeIgniter\Router\RouteCollection;

// Auth
//$routes->get('/', 'Home::index');

$routes->get('/auth/login', 'Auth::login');