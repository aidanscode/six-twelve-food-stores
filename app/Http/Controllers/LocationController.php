<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Location;

class LocationController extends Controller {

  public function index() {
    $locations = Location::all()->map(function(Location $location) {
      return [
        'id' => $location->id,
        'name' => $location->getName(),
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
    $location = Location::findOrFail($id);
    $menu = $location->getAllIngredients();

    return response([
      'success' => true,
      'menu' => $menu
    ]);
  }

}
