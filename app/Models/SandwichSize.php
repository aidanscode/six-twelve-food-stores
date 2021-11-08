<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\HasNiceClassName;
use App\Traits\HasImagePath;
use App\Traits\HasName;

class SandwichSize extends Model implements HasNiceClassName {

  use HasImagePath;
  use HasName;

  protected $hidden = ['created_at', 'updated_at'];

  static function getNiceClassName() : string {
    return 'Sandwich Size';
  }

}
