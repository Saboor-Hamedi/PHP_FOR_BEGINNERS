<?php
$routes = require_once 'router.php';
// Route funciton 
function routeToControl($url, $routes)
{

  if (array_key_exists($url, $routes)) {
    require_once $routes[$url];
  } else {
    abort();
  }
}
// abort funciton
function abort($code = 404)
{
  http_response_code(404);
  require_once "views/{$code}.php";
  die();
}
$url  = parse_url($_SERVER['REQUEST_URI'])['path'];
// load Controller
routeToControl($url, $routes);
