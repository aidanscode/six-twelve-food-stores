<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NutritionFact;
use App\Models\Temperature;

class TemperatureSeeder extends Seeder {

  public function run() {
    $cold = Temperature::create([
      'name' => 'Cold',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $cold->id,
      'ingredient_class' => Temperature::class,
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

    $toasted = Temperature::create([
      'name' => 'Toasted',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $toasted->id,
      'ingredient_class' => Temperature::class,
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
