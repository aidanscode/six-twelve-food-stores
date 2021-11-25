<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IngredientType;
use App\Models\Ingredient;
use App\Models\Location;

use Illuminate\Http\Request;

class IngredientManagementController extends Controller {

  public function create() {
    $ingredientTypes = IngredientType::all();
    $locations = Location::orderBy('name', 'ASC')->get();

    return view('admin.location.menu.create_ingredient', [
      'ingredientTypes' => $ingredientTypes,
      'locations' => $locations
    ]);
  }

  public function store(Request $request) {
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
      'iron' => 'required|integer|min:0',
      'image' => 'required|file|mimetypes:image/png,image/jpeg',
      'location_id' => 'required|exists:' . Location::class . ',id'
    ]);

    $shouldForceFlat = !in_array($request->input('ingredient_type_id'), [IngredientType::TYPE_MEAT, IngredientType::TYPE_BREAD_TYPE]);

    $ingredient = new Ingredient();
    $ingredient->ingredient_type_id = $request->input('ingredient_type_id');
    $ingredient->name = $request->input('name');
    $ingredient->is_flat = $shouldForceFlat ? true : boolval($request->input('is_flat'));
    $ingredient->image_path = ''; //saved later
    $ingredient->save();

    $ingredient->ingredientLocations()->create([
      'location_id' => $request->input('location_id')
    ]);

    $ingredient->nutritionFacts()->create(
      $request->only([
        'calories', 'total_fat', 'saturated_fat', 'trans_fat', 'cholesterol',
        'dietary_fiber', 'cholesterol', 'sodium', 'carbohydrates', 'dietary_fiber',
        'sugars', 'protein', 'vitamin_a', 'vitamin_c', 'calcium', 'iron'
      ])
    );

    $ingredient->updateImageFile($request->file('image'));

    $location = Location::find($request->input('location_id'));
    return redirect(route('location.manage', ['location' => $location]))->with('success', 'Successfully added new ingredient!');
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
      'iron' => 'required|integer|min:0',
      'image' => 'sometimes|file|mimetypes:image/png,image/jpeg'
    ]);

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

    $imageUpload = $request->file('image');
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
