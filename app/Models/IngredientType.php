<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IngredientType extends Model {

  const TYPE_TEMPERATURE = 1;
  const TYPE_BREAD_TYPE = 2;
  const TYPE_MEAT = 3;
  const TYPE_CHEESE = 4;
  const TYPE_SPREAD = 5;
  const TYPE_TOPPING = 6;

  protected $hidden = [
    'id', 'created_at', 'updated_at'
  ];

}
