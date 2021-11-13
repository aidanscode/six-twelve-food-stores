<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NutritionFact;
use App\Models\Spread;

class SpreadSeeder extends Seeder {

  public function run() {
    $mayo = Spread::create([
      'name' => 'Mayo',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $mayo->id,
      'ingredient_class' => Spread::class,
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

    $oil = Spread::create([
      'name' => 'Oil',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $oil->id,
      'ingredient_class' => Spread::class,
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

    $ranchDressing = Spread::create([
      'name' => 'Ranch Dressing',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $ranchDressing->id,
      'ingredient_class' => Spread::class,
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

    $buffaloSauce = Spread::create([
      'name' => 'Buffalo Sauce',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $buffaloSauce->id,
      'ingredient_class' => Spread::class,
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

    $creamyChipotle = Spread::create([
      'name' => 'Creamy Chipotle',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $creamyChipotle->id,
      'ingredient_class' => Spread::class,
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

    $miracleWhip = Spread::create([
      'name' => 'Miracle Whip',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $miracleWhip->id,
      'ingredient_class' => Spread::class,
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

    $spicyMustard = Spread::create([
      'name' => 'Spicy Mustard',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $spicyMustard->id,
      'ingredient_class' => Spread::class,
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

    $yellowMustard = Spread::create([
      'name' => 'Yellow Mustard',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $yellowMustard->id,
      'ingredient_class' => Spread::class,
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

    $ketchup = Spread::create([
      'name' => 'Ketchup',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $ketchup->id,
      'ingredient_class' => Spread::class,
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

    $bbqSauce = Spread::create([
      'name' => 'BBQ Sauce',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $bbqSauce->id,
      'ingredient_class' => Spread::class,
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

    $garlicAioli = Spread::create([
      'name' => 'Garlic Aioli',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $garlicAioli->id,
      'ingredient_class' => Spread::class,
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

    $honeyHotSauce = Spread::create([
      'name' => 'Honey Hot Sauce',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $honeyHotSauce->id,
      'ingredient_class' => Spread::class,
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

    $honeyMustardSauce = Spread::create([
      'name' => 'Honey Mustard Sauce',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $honeyMustardSauce->id,
      'ingredient_class' => Spread::class,
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

    $cherryPepperRelish = Spread::create([
      'name' => 'Cherry Pepper Relish',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $cherryPepperRelish->id,
      'ingredient_class' => Spread::class,
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
