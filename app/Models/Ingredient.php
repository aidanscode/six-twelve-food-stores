<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model {

  public function nutritionFacts() {
    return $this->hasOne(NutritionFact::class, 'ingredient_id');
  }

  public function getName() : string {
    return $this->name;
  }

  public function getImagePath() : string {
    return $this->image_path;
  }

}
