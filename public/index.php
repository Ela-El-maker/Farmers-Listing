<?php


require '../helpers.php';

// require basePath('views/home.view.php');



// inspectAndDie($uri);
// inspectAndDie($method);


require basePath('Router.php');

$router = new Router();

$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
