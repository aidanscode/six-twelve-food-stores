<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\IngredientType;
use App\Models\Ingredient;
use App\Models\Location;

class LocationManagementController extends Controller {

  public function index() {
    $locations = Location::all();

    return view('admin.location.index', [
      'locations' => $locations
    ]);
  }

  public function manage(Location $location) {
    return view('admin.location.manage', [
      'location' => $location
    ]);
  }

  public function edit(Location $location) {
    return view('admin.location.edit', [
      'location' => $location
    ]);
  }

  public function update(Request $request, Location $location) {
    $request->validate([
      'name' => 'required|string|min:1',
      'address' => 'required|string|min:1',
    ]);

    $location->name = $request->input('name');
    $location->address = $request->input('address');
    $location->save();

    return redirect(route('location.edit', ['location' => $location]))->with('success', 'Successfully updated location');
  }

  public function editIngredient(Ingredient $ingredient) {
    $ingredientTypes = IngredientType::all();

    return view('admin.location.menu.edit_ingredient', [
      'ingredientTypes' => $ingredientTypes,
      'ingredient' => $ingredient
    ]);
  }

  public function updateIngredient(Request $request, Ingredient $ingredient) {
    $request->validate([
      'name' => 'required|string|min:1',
      'ingredient_type_id' => 'required|exists:' . IngredientType::class . ',id',
      'is_flat' => 'required|in:true,false',
      'calories' => 'required|integer|min:0',
      'total_fat' => 'required|integer|min:0',
      'saturated_fat' => 'required|integer|min:0',
      'trans_fat' => 'required|integer|min:0',
      'cholesterol' => 'required|integer|min:0',
      'sodium' => 'required|integer|min:0',
      'carbohydrates' => 'required|integer|min:0',
      'dietary_fiber' => 'required|integer|min:0',
      'sugars' => 'required|integer|min:0',
      'protein' => 'required|integer|min:0',
      'vitamin_a' => 'required|integer|min:0',
      'vitamin_c' => 'required|integer|min:0',
      'calcium' => 'required|integer|min:0',
      'iron' => 'required|integer|min:0'
    ]);

    $imageUpload = $request->file('image');
    if ($imageUpload) {
      $mimeType = $imageUpload->getMimeType();
      if (!in_array($mimeType, ['image/png', 'image/jpeg'])) {
        return back()->withErrors(['Image upload must either be a png or a jpg file']);
      }
    }

    $ingredient->name = $request->input('name');
    $ingredient->ingredient_type_id = $request->input('ingredient_type_id');
    $ingredient->is_flat = $request->input('is_flat') === 'true' ? true : false;
    $ingredient->save();

    $nutritionFact = $ingredient->nutritionFacts;
    $nutritionFact->fill($request->only([
      'calories', 'total_fat', 'saturated_fat', 'trans_fat', 'cholesterol',
      'dietary_fiber', 'cholesterol', 'sodium', 'carbohydrates', 'dietary_fiber',
      'sugars', 'protein', 'vitamin_a', 'vitamin_c', 'calcium', 'iron'
    ]));
    $nutritionFact->save();

    if ($imageUpload) {
      $ingredient->updateImageFile($imageUpload);
    }

    return redirect(route('ingredient.edit', ['ingredient' => $ingredient]))->with('success', 'Successfully updated the ingredient information!');
  }

  public function deleteIngredient(Ingredient $ingredient) {
    $ingredient->fullyDelete();

    return redirect(route('location.index'))->with('success', 'Successfully deleted ingredient!');
  }

}
