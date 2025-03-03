<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');


//Produto
$routes->get('/produtos/listar', 'Produtos::index');

$routes->get('produtos/create', 'Produtos::create');

$routes->post('produtos/store', 'Produtos::store');

$routes->get('produtos/edit/(:num)', 'Produtos::edit/$1');

$routes->post('produtos/update/(:num)', 'Produtos::update/$1');

$routes->get('produtos/delete/(:num)', 'Produtos::delete/$1');


//Cliente
$routes->get('/clientes/listar', 'Clientes::index');

$routes->get('clientes/create', 'Clientes::create');

$routes->post('clientes/store', 'Clientes::store');

$routes->get('clientes/edit/(:num)', 'Clientes::edit/$1');

$routes->post('clientes/update/(:num)', 'Clientes::update/$1');

$routes->get('clientes/delete/(:num)', 'Clientes::delete/$1');


//Pedido
$routes->get('/pedidos/listar', 'Pedidos::index');

$routes->get('pedidos/create', 'Pedidos::create');

$routes->post('pedidos/store', 'Pedidos::store');

$routes->get('pedidos/edit/(:num)', 'Pedidos::edit/$1');

$routes->post('pedidos/update/(:num)', 'Pedidos::update/$1');

$routes->get('pedidos/delete/(:num)', 'Pedidos::delete/$1');
