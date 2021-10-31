<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helpers;
use App\Traits\HasName;

class Location extends Model {

  use HasName;

  public function ingredientLocations() {
    return $this->hasMany(IngredientLocation::class);
  }

  public function getAllIngredients() : array {
    $ingredientLocationsByIngredientClass = $this->ingredientLocations->groupBy('ingredient_class');
    $ingredients = [];

    foreach($ingredientLocationsByIngredientClass as $ingredientClass => $ingredientLocations) {
      $niceClassName = $ingredientClass::getNiceClassName();
      $ingredients[$niceClassName] = $ingredientClass::findMany($ingredientLocations->pluck('ingredient_id'));
    }

    return $ingredients;
  }

  public function getMenuUrl() : string {
    return route('api.locations.menu', ['id' => $this->id]);
  }

}
