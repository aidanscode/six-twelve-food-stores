<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NutritionFact;
use App\Models\Topping;

class ToppingSeeder extends Seeder {

  public function run() {
    $toppings = [
      'Oregano'
    ];

    $lettuce = Topping::create([
      'name' => 'Lettuce',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $lettuce->id,
      'ingredient_class' => Topping::class,
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

    $tomato = Topping::create([
      'name' => 'Tomato',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $tomato->id,
      'ingredient_class' => Topping::class,
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

    $onion = Topping::create([
      'name' => 'Onion',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $onion->id,
      'ingredient_class' => Topping::class,
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

    $pickles = Topping::create([
      'name' => 'Pickles',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $pickles->id,
      'ingredient_class' => Topping::class,
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

    $sweetPeppers = Topping::create([
      'name' => 'Sweet Peppers',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $sweetPeppers->id,
      'ingredient_class' => Topping::class,
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

    $hotPeppers = Topping::create([
      'name' => 'Hot Peppers',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $hotPeppers->id,
      'ingredient_class' => Topping::class,
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

    $cucumbers = Topping::create([
      'name' => 'Cucumbers',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $cucumbers->id,
      'ingredient_class' => Topping::class,
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

    $jalapenoPeppers = Topping::create([
      'name' => 'Jalapeno Peppers',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $jalapenoPeppers->id,
      'ingredient_class' => Topping::class,
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

    $gratedParmesan = Topping::create([
      'name' => 'Grated Parmesan',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $gratedParmesan->id,
      'ingredient_class' => Topping::class,
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

    $salt = Topping::create([
      'name' => 'Salt',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $salt->id,
      'ingredient_class' => Topping::class,
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

    $pepper = Topping::create([
      'name' => 'Pepper',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $pepper->id,
      'ingredient_class' => Topping::class,
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

    $oldBay = Topping::create([
      'name' => 'Old Bay',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $oldBay->id,
      'ingredient_class' => Topping::class,
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

    $oregano = Topping::create([
      'name' => 'Oregano',
      'image_path' => ''
    ]);
    NutritionFact::create([
      'ingredient_id' => $oregano->id,
      'ingredient_class' => Topping::class,
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
