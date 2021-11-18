<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;

class IngredientController extends Controller {

  public function photo($id) {
    $ingredient = Ingredient::findOrFail($id);
    $path = storage_path($ingredient->getImagePath());

    if (!file_exists($path) || is_dir($path)) {
      return abort(500);
    }

    return response()->file($path);
  }

}
