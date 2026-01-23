<?php
// App/Config/routes.php

// Routes publiques
$router->get('/', 'HomeController@index');
$router->get('/login', 'AuthController@login');
$router->get('/signup', 'AuthController@register');
$router->post('/register', 'AuthController@register');
$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');

// Routes produits
$router->get('/products', 'ProductController@index');
$router->get('/product/{id}', 'ProductController@show');

// Routes panier
$router->get('/cart', 'CartController@index');

// Routes admin
$router->get('/admin', 'AdminController@dashboard');
$router->get('/admin/products', 'AdminController@products');
$router->get('/admin/categories', 'AdminController@categories');
$router->get('/admin/orders', 'AdminController@orders');
$router->get('/admin/clients', 'AdminController@clients');