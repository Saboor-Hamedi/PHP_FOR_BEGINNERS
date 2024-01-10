<?php

namespace Beginners\functions;

class Validator
{
  // MIN & MAX, INF is for infinity value
  public static function string($value, $min = 1, $max = INF)
  {
    // return strlen(trim($value))  === 0;
    $value = trim($value);
    return strlen($value) >= $min && strlen($value) <= $max; // check, min and max length

  }
  public static function email($value)
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }
}
