<?php

use Beginners\functions\Response;

function dd($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}
// active lists on nav
function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}

// check if the user_id matches the post id
function authorized($condition, $status = Response::FORBIDDEN)
{
  if (!$condition) {
    abort($status);
  }
}
