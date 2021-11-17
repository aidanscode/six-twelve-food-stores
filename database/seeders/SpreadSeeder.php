<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientType;
use App\Models\NutritionFact;
use App\Models\Ingredient;

class SpreadSeeder extends Seeder {

  public function run() {
    $mayo = Ingredient::create([
      'name' => 'Mayo',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $mayo->id,
      'calories' => 150,
      'total_fat' => 18,
      'saturated_fat' => 3,
      'trans_fat' => 0,
      'cholesterol' => 15,
      'sodium' => 110,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $oil = Ingredient::create([
      'name' => 'Oil',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $oil->id,
      'calories' => 150,
      'total_fat' => 18,
      'saturated_fat' => 3,
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

    $ranchDressing = Ingredient::create([
      'name' => 'Ranch Dressing',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $ranchDressing->id,
      'calories' => 250,
      'total_fat' => 25,
      'saturated_fat' => 4,
      'trans_fat' => 0,
      'cholesterol' => 20,
      'sodium' => 350,
      'carbohydrates' => 7,
      'dietary_fiber' => 0,
      'sugars' => 4,
      'protein' => 4,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $buffaloSauce = Ingredient::create([
      'name' => 'Buffalo Sauce',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $buffaloSauce->id,
      'calories' => 110,
      'total_fat' => 11,
      'saturated_fat' => 2,
      'trans_fat' => 0,
      'cholesterol' => 15,
      'sodium' => 1020,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $creamyChipotle = Ingredient::create([
      'name' => 'Creamy Chipotle',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $creamyChipotle->id,
      'calories' => 210,
      'total_fat' => 21,
      'saturated_fat' => 3,
      'trans_fat' => 0,
      'cholesterol' => 30,
      'sodium' => 480,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $miracleWhip = Ingredient::create([
      'name' => 'Miracle Whip',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $miracleWhip->id,
      'calories' => 140,
      'total_fat' => 11,
      'saturated_fat' => 2,
      'trans_fat' => 0,
      'cholesterol' => 15,
      'sodium' => 420,
      'carbohydrates' => 9,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $spicyMustard = Ingredient::create([
      'name' => 'Spicy Mustard',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $spicyMustard->id,
      'calories' => 50,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 690,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 3,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 54,
      'iron' => 1
    ]);

    $yellowMustard = Ingredient::create([
      'name' => 'Yellow Mustard',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $yellowMustard->id,
      'calories' => 20,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 240,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $ketchup = Ingredient::create([
      'name' => 'Ketchup',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $ketchup->id,
      'calories' => 60,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 390,
      'carbohydrates' => 15,
      'dietary_fiber' => 0,
      'sugars' => 12,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $bbqSauce = Ingredient::create([
      'name' => 'BBQ Sauce',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $bbqSauce->id,
      'calories' => 110,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 410,
      'carbohydrates' => 27,
      'dietary_fiber' => 0,
      'sugars' => 24,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 5.4,
      'calcium' => 0,
      'iron' => 0
    ]);

    $garlicAioli = Ingredient::create([
      'name' => 'Garlic Aioli',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $garlicAioli->id,
      'calories' => 130,
      'total_fat' => 15,
      'saturated_fat' => 2.5,
      'trans_fat' => 0,
      'cholesterol' => 5,
      'sodium' => 60,
      'carbohydrates' => 1,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $honeyHotSauce = Ingredient::create([
      'name' => 'Honey Hot Sauce',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $honeyHotSauce->id,
      'calories' => 90,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 0,
      'carbohydrates' => 27,
      'dietary_fiber' => 0,
      'sugars' => 21,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $honeyMustardSauce = Ingredient::create([
      'name' => 'Honey Mustard Sauce',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $honeyMustardSauce->id,
      'calories' => 90,
      'total_fat' => 9,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 15,
      'sodium' => 150,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $cherryPepperRelish = Ingredient::create([
      'name' => 'Cherry Pepper Relish',
      'ingredient_type_id' => IngredientType::TYPE_SPREAD,
      'is_flat' => true,
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $cherryPepperRelish->id,
      'calories' => 10,
      'total_fat' => 0,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 400,
      'carbohydrates' => 2,
      'dietary_fiber' => 0,
      'sugars' => 2,
      'protein' => 0,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);
  }

}
