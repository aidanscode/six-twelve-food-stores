<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NutritionFact;
use App\Models\Cheese;

class CheeseSeeder extends Seeder {

  public function run() {
    $no = Cheese::create([
      'name' => 'No Cheese',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $no->id,
      'ingredient_class' => Cheese::class,
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

    $cheddar = Cheese::create([
      'name' => 'Cheddar',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $cheddar->id,
      'ingredient_class' => Cheese::class,
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

    $american = Cheese::create([
      'name' => 'American',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $american->id,
      'ingredient_class' => Cheese::class,
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

    $provolone = Cheese::create([
      'name' => 'Provolone',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $provolone->id,
      'ingredient_class' => Cheese::class,
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

    $swiss = Cheese::create([
      'name' => 'Swiss',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $swiss->id,
      'ingredient_class' => Cheese::class,
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

    $pepperJack = Cheese::create([
      'name' => 'Pepper Jack',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $pepperJack->id,
      'ingredient_class' => Cheese::class,
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
