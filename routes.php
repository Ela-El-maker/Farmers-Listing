<?php

$router->get('/', 'controllers/home.php');
$router->get('/renter', 'controllers/renter/renter.php');
$router->get('/rentee', 'controllers/rentee/rentee.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');
$router->get('/renter/create', 'controllers/renter/listings/create.php');
