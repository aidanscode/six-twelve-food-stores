<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionFact extends Model {

  protected $hidden = [
    'id', 'ingredient_id', 'created_at', 'updated_at'
  ];

}
