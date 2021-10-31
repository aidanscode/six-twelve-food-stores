<?php

namespace App\Traits;

trait HasImagePath {

  public function getImagePath() : string {
    return $this->image_path;
  }

}
