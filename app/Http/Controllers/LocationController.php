<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\Location;

class LocationController extends Controller {

  public function index() {
    $locations = Location::all()->map(function(Location $location) {
      return [
        'id' => $location->id,
        'name' => $location->name,
        'address' => $location->address,
        'menu_url' => $location->getMenuUrl()
      ];
    });

    return response()->json([
      'success' => true,
      'locations' => $locations
    ]);
  }

  public function getMenuForLocation($id) {
    $location = Location::with('menu.nutritionFacts', 'menu.ingredientType')
      ->where('id', $id)
      ->firstOrFail();
    $menu = $location
      ->menu
      ->map(fn(Ingredient $ingredient) => $ingredient->getApiStructuredData())
      ->groupBy(fn(array $ingredient) => $ingredient['ingredient_type']['name']);

    return response([
      'success' => true,
      'menu' => $menu
    ]);
  }

}
