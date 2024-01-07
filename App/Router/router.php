<?php
require_once  '../App/functions/func.php';
$url  = parse_url($_SERVER['REQUEST_URI'])['path'];

// routes associative array
$routes = [
  '/' => '../App/controllers/index.php',
  '/about' => '../App/controllers/about.php',
  '/contact' => '../App/controllers/contact.php',
];

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
// load Controller
routeToControl($url, $routes);
