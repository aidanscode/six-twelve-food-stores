<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientType;
use App\Models\NutritionFact;
use App\Models\Ingredient;

class MeatSeeder extends Seeder {

  public function run() {
    $ham = Ingredient::create([
      'name' => 'Ham',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\ham.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $ham->id,
      'calories' => 150,
      'total_fat' => 5,
      'saturated_fat' => 3,
      'trans_fat' => 0,
      'cholesterol' => 75,
      'sodium' => 1170,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 24,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $turkey = Ingredient::create([
      'name' => 'Turkey',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\turkey.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $turkey->id,
      'calories' => 150,
      'total_fat' => 3,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 60,
      'sodium' => 1380,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 27,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0.5
    ]);

    $italian = Ingredient::create([
      'name' => 'Italian',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\italian.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $italian->id,
      'calories' => 270,
      'total_fat' => 18,
      'saturated_fat' => 6,
      'trans_fat' => 0,
      'cholesterol' => 75,
      'sodium' => 1440,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 24,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $chickenSalad = Ingredient::create([
      'name' => 'Chicken Salad',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\chicken_salad.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $chickenSalad->id,
      'calories' => 360,
      'total_fat' => 27,
      'saturated_fat' => 5,
      'trans_fat' => 0,
      'cholesterol' => 90,
      'sodium' => 810,
      'carbohydrates' => 9,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 24,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 54,
      'iron' => 0.5
    ]);

    $blt = Ingredient::create([
      'name' => 'BLT',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\blt.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $blt->id,
      'calories' => 300,
      'total_fat' => 24,
      'saturated_fat' => 9,
      'trans_fat' => 0,
      'cholesterol' => 60,
      'sodium' => 900,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 15,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 54,
      'iron' => 0.5
    ]);

    $cheese = Ingredient::create([
      'name' => 'Cheese',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\cheese.png',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $cheese->id,
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

    $pepperoni = Ingredient::create([
      'name' => 'Pepperoni',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\pepperoni.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $pepperoni->id,
      'calories' => 540,
      'total_fat' => 48,
      'saturated_fat' => 18,
      'trans_fat' => 0,
      'cholesterol' => 105,
      'sodium' => 1950,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 21,
      'vitamin_a' => 90,
      'vitamin_c' => 99,
      'calcium' => 0,
      'iron' => 0.5
    ]);

    $veggie = Ingredient::create([
      'name' => 'Veggie',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\veggie.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $veggie->id,
      'calories' => 80,
      'total_fat' => 6,
      'saturated_fat' => 0,
      'trans_fat' => 0,
      'cholesterol' => 0,
      'sodium' => 0,
      'carbohydrates' => 9,
      'dietary_fiber' => 3,
      'sugars' => 6,
      'protein' => 3,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0.5
    ]);

    $chickenStrips = Ingredient::create([
      'name' => 'Chicken Strips',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\chicken_strips.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $chickenStrips->id,
      'calories' => 180,
      'total_fat' => 4,
      'saturated_fat' => 2,
      'trans_fat' => 0,
      'cholesterol' => 115,
      'sodium' => 700,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 36,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0
    ]);

    $beefSteak = Ingredient::create([
      'name' => 'Beef Steak',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\beefsteak.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $beefSteak->id,
      'calories' => 270,
      'total_fat' => 18,
      'saturated_fat' => 8,
      'trans_fat' => 0,
      'cholesterol' => 60,
      'sodium' => 690,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 24,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 8
    ]);

    $grilledChicken = Ingredient::create([
      'name' => 'Grilled Chicken',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\grilled_chicken.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $grilledChicken->id,
      'calories' => 270,
      'total_fat' => 5,
      'saturated_fat' => 3,
      'trans_fat' => 0,
      'cholesterol' => 175,
      'sodium' => 1050,
      'carbohydrates' => 0,
      'dietary_fiber' => 0,
      'sugars' => 0,
      'protein' => 54,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 8
    ]);

    $chickenSteak = Ingredient::create([
      'name' => 'Chicken Steak',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\chicken_cheesesteak.jpg',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $chickenSteak->id,
      'calories' => 180,
      'total_fat' => 8,
      'saturated_fat' => 3,
      'trans_fat' => 0,
      'cholesterol' => 45,
      'sodium' => 810,
      'carbohydrates' => 3,
      'dietary_fiber' => 0,
      'sugars' => 3,
      'protein' => 33,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 0,
      'iron' => 0.5
    ]);

    $meatball = Ingredient::create([
      'name' => 'Meatball',
      'ingredient_type_id' => IngredientType::TYPE_MEAT,
      'image_path' => 'images\ingredients\default\meatballs.jpg',
      'is_flat' => 0
    ]);
    NutritionFact::create([
      'ingredient_id' => $meatball->id,
      'calories' => 720,
      'total_fat' => 57,
      'saturated_fat' => 18,
      'trans_fat' => 1.5,
      'cholesterol' => 75,
      'sodium' => 2100,
      'carbohydrates' => 30,
      'dietary_fiber' => 0,
      'sugars' => 12,
      'protein' => 18,
      'vitamin_a' => 0,
      'vitamin_c' => 0,
      'calcium' => 225,
      'iron' => 2
    ]);
  }

}
