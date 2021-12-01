<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientType;
use App\Models\NutritionFact;
use App\Models\Ingredient;

class TemperatureSeeder extends Seeder {

  public function run() {
    $cold = Ingredient::create([
      'name' => 'Cold',
      'ingredient_type_id' => IngredientType::TYPE_TEMPERATURE,
      'is_flat' => true,
      'image_path' => 'images/ingredients/default/white_bread.jpg'
    ]);
    NutritionFact::create([
      'ingredient_id' => $cold->id,
      'calories' => 0,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 0,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $toasted = Ingredient::create([
      'name' => 'Toasted',
      'ingredient_type_id' => IngredientType::TYPE_TEMPERATURE,
      'is_flat' => true,
      'image_path' => 'images/ingredients/default/wheat_bread.jpg'
    ]);
    NutritionFact::create([
      'ingredient_id' => $toasted->id,
      'calories' => 0,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 0,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);
  }

}
