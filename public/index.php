<?php

use Beginners\Router\Routers;

const MAIN_PATH = __DIR__ . '/../';
require_once('../App/functions/bootstrap.php');
require_once base_path('/App/Router/Router.php');


$uri = ltrim(parse_url($_SERVER['REQUEST_URI'])['path']);
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
