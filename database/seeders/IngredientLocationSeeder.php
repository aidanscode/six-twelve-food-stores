<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientLocation;
use App\Models\Location;
use App\Models\Ingredient;

class IngredientLocationSeeder extends Seeder {

  public function run() {
    $locations = Location::all();
    $ingredients = Ingredient::all();

    $locations->each(function(Location $location) use ($ingredients) {
      $ingredients->each(function($ingredient) use ($location) {
        IngredientLocation::create([
          'ingredient_id' => $ingredient->id,
          'location_id' => $location->id
        ]);
      });
    });
  }

}
