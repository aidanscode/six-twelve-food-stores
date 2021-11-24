<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionFact extends Model {

  protected $hidden = [
    'id', 'ingredient_id', 'created_at', 'updated_at'
  ];

  protected $fillable = [
    'calories', 'total_fat', 'saturated_fat', 'trans_fat', 'cholesterol',
    'sodium', 'carbohydrates', 'dietary_fiber', 'cholesterol', 'dietary_fiber',
    'sugars', 'protein', 'vitamin_a', 'vitamin_c', 'calcium', 'iron'
  ];

}
