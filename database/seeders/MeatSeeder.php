<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NutritionFact;
use App\Models\Meat;

class MeatSeeder extends Seeder {

  public function run() {
    $flatMeats = [
      'Meatball (NOT FLAT)'
    ];

    $ham = Meat::create([
      'name' => 'Ham',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $ham->id,
      'ingredient_class' => Meat::class,
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

    $turkey = Meat::create([
      'name' => 'Turkey',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $turkey->id,
      'ingredient_class' => Meat::class,
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

    $italian = Meat::create([
      'name' => 'Italian',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $italian->id,
      'ingredient_class' => Meat::class,
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

    $chickenSalad = Meat::create([
      'name' => 'Chicken Salad',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $chickenSalad->id,
      'ingredient_class' => Meat::class,
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

    $blt = Meat::create([
      'name' => 'BLT',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $blt->id,
      'ingredient_class' => Meat::class,
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

    $cheese = Meat::create([
      'name' => 'Cheese',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $cheese->id,
      'ingredient_class' => Meat::class,
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

    $pepperoni = Meat::create([
      'name' => 'Pepperoni',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $pepperoni->id,
      'ingredient_class' => Meat::class,
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

    $veggie = Meat::create([
      'name' => 'Veggie',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $veggie->id,
      'ingredient_class' => Meat::class,
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

    $chickenStrips = Meat::create([
      'name' => 'Chicken Strips',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $chickenStrips->id,
      'ingredient_class' => Meat::class,
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

    $beefSteak = Meat::create([
      'name' => 'Beef Steak',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $beefSteak->id,
      'ingredient_class' => Meat::class,
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

    $grilledChicken = Meat::create([
      'name' => 'Grilled Chicken',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $grilledChicken->id,
      'ingredient_class' => Meat::class,
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

    $chickenSteak = Meat::create([
      'name' => 'Chicken Steak',
      'image_path' => '',
      'is_flat' => 1
    ]);
    NutritionFact::create([
      'ingredient_id' => $chickenSteak->id,
      'ingredient_class' => Meat::class,
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

    $meatball = Meat::create([
      'name' => 'Meatball',
      'image_path' => '',
      'is_flat' => 0
    ]);
    NutritionFact::create([
      'ingredient_id' => $meatball->id,
      'ingredient_class' => Meat::class,
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
