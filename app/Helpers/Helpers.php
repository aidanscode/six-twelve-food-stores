<?php

namespace App\Helpers;

class Helpers {

  public static function getFriendlyClassName(string $fullClass) : string {
    $exploded = explode('\\', $fullClass);
    return $exploded[count($exploded) - 1];
  }

}
