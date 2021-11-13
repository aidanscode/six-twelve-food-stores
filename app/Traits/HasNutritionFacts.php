<?php

namespace App\Traits;

use App\Models\NutritionFact;

trait HasNutritionFacts {

  public function nutritionFacts() {
    return $this->hasOne(NutritionFact::class, 'ingredient_id')
      ->where('ingredient_class', get_class($this));
  }

}
