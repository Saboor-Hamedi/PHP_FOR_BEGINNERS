<?php

use Beginners\functions\Response;

// dd die and dump
function dd($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}
// urlIs, active list on the nav
function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}
// check if the post_id is not belongs to the current logged in user

function authorized($condition, $status = Response::FORBIDDEN)
{
  if (!$condition) {
    abort($status);
  }
}
// make base path 
function base_path($path)
{
  return MAIN_PATH . $path;
}
// view on controllers, this view works for both view, and footer view
// e.g, public/views/show.view.php
function views($path, $attribute = [])
{
  extract($attribute);
  require base_path('public/views/')  . $path;
}
