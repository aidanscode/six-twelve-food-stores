<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientLocation;
use App\Models\SandwichSize;
use App\Models\Temperature;
use App\Models\BreadType;
use App\Models\Location;
use App\Models\Topping;
use App\Models\Cheese;
use App\Models\Spread;
use App\Models\Meat;

class IngredientLocationSeeder extends Seeder {

  public function run() {
    $locations = Location::all();
    $sandwichSizes = SandwichSize::all();
    $temperatures = Temperature::all();
    $breadTypes = BreadType::all();
    $toppings = Topping::all();
    $cheeses = Cheese::all();
    $spreads = Spread::all();
    $meats = Meat::all();

    $allIngredients = $sandwichSizes->concat($temperatures)
      ->concat($breadTypes)
      ->concat($toppings)
      ->concat($cheeses)
      ->concat($spreads)
      ->concat($meats);

    $locations->each(function(Location $location) use ($allIngredients) {
      $allIngredients->each(function($ingredient) use ($location) {
        IngredientLocation::create([
          'ingredient_id' => $ingredient->id,
          'ingredient_class' => get_class($ingredient),
          'location_id' => $location->id
        ]);
      });
    });
  }

}
