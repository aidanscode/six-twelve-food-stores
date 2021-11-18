<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientType;
use App\Models\NutritionFact;
use App\Models\Ingredient;

class CheeseSeeder extends Seeder {

  public function run() {
    $no = Ingredient::create([
      'name' => 'No Cheese',
      'ingredient_type_id' => IngredientType::TYPE_CHEESE,
      'is_flat' => true,
      'image_path' => 'images/ingredients/default/circle_with_cross.png'
    ]);
    NutritionFact::create([
      'ingredient_id' => $no->id,
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

    $cheddar = Ingredient::create([
      'name' => 'Cheddar',
      'ingredient_type_id' => IngredientType::TYPE_CHEESE,
      'is_flat' => true,
      'image_path' => 'images/ingredients/default/cheddar.jpg'
    ]);
    NutritionFact::create([
      'ingredient_id' => $cheddar->id,
      'calories' => 180,
      'total_fat' => 14,
      'saturated_fat' => 8,
      'trans_fat' => 0,
      'cholesterol' => 45,
      'sodium' => 270,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 12,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 270,
      'iron' => 0
    ]);

    $american = Ingredient::create([
      'name' => 'American',
      'ingredient_type_id' => IngredientType::TYPE_CHEESE,
      'is_flat' => true,
      'image_path' => 'images/ingredients/default/american.jpg'
    ]);
    NutritionFact::create([
      'ingredient_id' => $american->id,
      'calories' => 150,
      'total_fat' => 14,
      'saturated_fat' => 8,
      'trans_fat' => 0,
      'cholesterol' => 45,
      'sodium' => 570,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 9,
      'vitamin_a' => 54,
      'vitamin_c' => 0,
      'calcium' => 225,
      'iron' => 0
    ]);

    $provolone = Ingredient::create([
      'name' => 'Provolone',
      'ingredient_type_id' => IngredientType::TYPE_CHEESE,
      'is_flat' => true,
      'image_path' => 'images/ingredients/default/provolone.jpg'
    ]);
    NutritionFact::create([
      'ingredient_id' => $provolone->id,
      'calories' => 150,
      'total_fat' => 14,
      'saturated_fat' => 6,
      'trans_fat' => 0,
      'cholesterol' => 30,
      'sodium' => 380,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 12,
      'vitamin_a' => 54,
      'vitamin_c' => 0,
      'calcium' => 270,
      'iron' => 0
    ]);

    $swiss = Ingredient::create([
      'name' => 'Swiss',
      'ingredient_type_id' => IngredientType::TYPE_CHEESE,
      'is_flat' => true,
      'image_path' => 'images/ingredients/default/swiss.jpg'
    ]);
    NutritionFact::create([
      'ingredient_id' => $swiss->id,
      'calories' => 180,
      'total_fat' => 12,
      'saturated_fat' => 8,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 80,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 12,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 270,
      'iron' => 0
    ]);

    $pepperJack = Ingredient::create([
      'name' => 'Pepper Jack',
      'ingredient_type_id' => IngredientType::TYPE_CHEESE,
      'is_flat' => true,
      'image_path' => 'images/ingredients/default/pepper_jack.jpg'
    ]);
    NutritionFact::create([
      'ingredient_id' => $pepperJack->id,
      'calories' => 150,
      'total_fat' => 12,
      'saturated_fat' => 8,
      'trans_fat' => 0,
      'cholesterol' => 45,
      'sodium' => 270,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 12,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 270,
      'iron' => 0
    ]);
  }

}
