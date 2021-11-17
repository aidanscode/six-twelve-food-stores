<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientType;
use App\Models\NutritionFact;
use App\Models\Ingredient;

class ToppingSeeder extends Seeder {

  public function run() {
    $lettuce = Ingredient::create([
      'name' => 'Lettuce',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $lettuce->id,
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
      'vitamin_c' => 18,
      'calcium' => 0,
      'iron' => 0
    ]);

    $tomato = Ingredient::create([
      'name' => 'Tomato',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $tomato->id,
      'calories' => 20,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 0,
      'carbohydrates' => 4,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 72,
      'vitamin_c' => 7.2,
      'calcium' => 0,
      'iron' => 0
    ]);

    $onion = Ingredient::create([
      'name' => 'Onion',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $onion->id,
      'calories' => 20,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 0,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 5.4,
      'calcium' => 0,
      'iron' => 0
    ]);

    $pickles = Ingredient::create([
      'name' => 'Pickles',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $pickles->id,
      'calories' => 0,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 720,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 54,
      'iron' => 0
    ]);

    $sweetPeppers = Ingredient::create([
      'name' => 'Sweet Peppers',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $sweetPeppers->id,
      'calories' => 50,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 260,
      'carbohydrates' => 12,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $hotPeppers = Ingredient::create([
      'name' => 'Hot Peppers',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $hotPeppers->id,
      'calories' => 20,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 1080,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $cucumbers = Ingredient::create([
      'name' => 'Cucumbers',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $cucumbers->id,
      'calories' => 0,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 0,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $jalapenoPeppers = Ingredient::create([
      'name' => 'Jalapeno Peppers',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $jalapenoPeppers->id,
      'calories' => 20,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 690,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 54,
      'vitamin_c' => 54,
      'calcium' => 54,
      'iron' => 0
    ]);

    $gratedParmesan = Ingredient::create([
      'name' => 'Grated Parmesan',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $gratedParmesan->id,
      'calories' => 80,
      'total_fat' => 5,
      'saturated_fat' => 3,
      'trans_fat' => 0,
      'cholesterol' => 15,
      'sodium' => 270,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 3,
      'vitamin_a' => 54,
      'vitamin_c' => 0,
      'calcium' => 180,
      'iron' => 0
    ]);

    $salt = Ingredient::create([
      'name' => 'Salt',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $salt->id,
      'calories' => 0,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 300,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $pepper = Ingredient::create([
      'name' => 'Pepper',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $pepper->id,
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

    $oldBay = Ingredient::create([
      'name' => 'Old Bay',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $oldBay->id,
      'calories' => 0,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 170,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $oregano = Ingredient::create([
      'name' => 'Oregano',
      'ingredient_type_id' => IngredientType::TYPE_TOPPING,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $oregano->id,
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
