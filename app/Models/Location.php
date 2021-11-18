<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

  public function ingredientLocations() {
    return $this->hasMany(IngredientLocation::class);
  }

  public function menu() {
    return $this->belongsToMany(Ingredient::class, 'ingredient_location', 'location_id', 'ingredient_id')
      ->using(IngredientLocation::class);
  }

  public function getMenuUrl() : string {
    return route('api.locations.menu', ['id' => $this->id]);
  }

}
