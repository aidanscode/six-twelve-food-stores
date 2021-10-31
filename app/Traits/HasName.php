<?php

namespace App\Traits;

trait HasName {

  public function getName() : string {
    return $this->name;
  }

}
