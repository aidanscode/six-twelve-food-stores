<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientType;
use App\Models\NutritionFact;
use App\Models\Ingredient;

class BreadTypeSeeder extends Seeder {

  public function run() {
    $sizes = collect([
      ['name' => 'Small (8 in)', 'multiplier' => 2/3, 'path' => 'images\ingredients\default\bread_small.jpg'],
      ['name' => 'Medium (12 in)', 'multiplier' => 1, 'path' => 'images\ingredients\default\bread_medium.jpg'],
      ['name' => 'Small (8 in)', 'multiplier' => 3/2, 'path' => 'images\ingredients\default\bread_large.jpg'],
    ]);

    //White breads
    $sizes->each(function(array $size) {
      $white = Ingredient::create([
        'name' => 'White ' . $size['name'],
        'ingredient_type_id' => IngredientType::TYPE_BREAD_TYPE,
        'image_path' => $size['path'],
        'is_flat' => false
      ]);
      $sizeMultiplier = $size['multiplier'];

      NutritionFact::create([
        'ingredient_id' => $white->id,
        'calories' => $this->adjustForSize(350, $sizeMultiplier),
        'total_fat' => $this->adjustForSize(3, $sizeMultiplier),
        'saturated_fat' => $this->adjustForSize(0, $sizeMultiplier),
        'trans_fat' => $this->adjustForSize(0, $sizeMultiplier),
        'cholesterol' => $this->adjustForSize(0, $sizeMultiplier),
        'sodium' => $this->adjustForSize(680, $sizeMultiplier),
        'carbohydrates' => $this->adjustForSize(65, $sizeMultiplier),
        'dietary_fiber' => $this->adjustForSize(2, $sizeMultiplier),
        'sugars' => $this->adjustForSize(2, $sizeMultiplier),
        'protein' => $this->adjustForSize(13, $sizeMultiplier),
        'vitamin_a' => $this->adjustForSize(0, $sizeMultiplier),
        'vitamin_c' => $this->adjustForSize(0, $sizeMultiplier),
        'calcium' => $this->adjustForSize(135, $sizeMultiplier),
        'iron' => $this->adjustForSize(1.52, $sizeMultiplier)
      ]);
    });

    //Wheat breads
    $sizes->each(function(array $size) {
      $wheat = Ingredient::create([
        'name' => 'Wheat ' . $size['name'],
        'ingredient_type_id' => IngredientType::TYPE_BREAD_TYPE,
        'image_path' => $size['path'],
        'is_flat' => false
      ]);
      $sizeMultiplier = $size['multiplier'];
      NutritionFact::create([
        'ingredient_id' => $wheat->id,
        'calories' => $this->adjustForSize(360, $sizeMultiplier),
        'total_fat' => $this->adjustForSize(4, $sizeMultiplier),
        'saturated_fat' => $this->adjustForSize(0.5, $sizeMultiplier),
        'trans_fat' => $this->adjustForSize(0, $sizeMultiplier),
        'cholesterol' => $this->adjustForSize(0, $sizeMultiplier),
        'sodium' => $this->adjustForSize(570, $sizeMultiplier),
        'carbohydrates' => $this->adjustForSize(74, $sizeMultiplier),
        'dietary_fiber' => $this->adjustForSize(6, $sizeMultiplier),
        'sugars' => $this->adjustForSize(8, $sizeMultiplier),
        'protein' => $this->adjustForSize(15, $sizeMultiplier),
        'vitamin_a' => $this->adjustForSize(0, $sizeMultiplier),
        'vitamin_c' => $this->adjustForSize(0, $sizeMultiplier),
        'calcium' => $this->adjustForSize(0, $sizeMultiplier),
        'iron' => $this->adjustForSize(1.5, $sizeMultiplier)
      ]);
    });

    //Flat breads
    $sizes->each(function(array $size) {
      $flat = Ingredient::create([
        'name' => 'Flat ' . $size['name'],
        'ingredient_type_id' => IngredientType::TYPE_BREAD_TYPE,
        'image_path' => $size['path'],
        'is_flat' => true
      ]);
      $sizeMultiplier = $size['multiplier'];
      NutritionFact::create([
        'ingredient_id' => $flat->id,
        'calories' => $this->adjustForSize(390, $sizeMultiplier),
        'total_fat' => $this->adjustForSize(6, $sizeMultiplier),
        'saturated_fat' => $this->adjustForSize(0, $sizeMultiplier),
        'trans_fat' => $this->adjustForSize(0, $sizeMultiplier),
        'cholesterol' => $this->adjustForSize(0, $sizeMultiplier),
        'sodium' => $this->adjustForSize(750, $sizeMultiplier),
        'carbohydrates' => $this->adjustForSize(72, $sizeMultiplier),
        'dietary_fiber' => $this->adjustForSize(9, $sizeMultiplier),
        'sugars' => $this->adjustForSize(9, $sizeMultiplier),
        'protein' => $this->adjustForSize(15, $sizeMultiplier),
        'vitamin_a' => $this->adjustForSize(0, $sizeMultiplier),
        'vitamin_c' => $this->adjustForSize(0, $sizeMultiplier),
        'calcium' => $this->adjustForSize(54, $sizeMultiplier),
        'iron' => $this->adjustForSize(1.3, $sizeMultiplier)
      ]);
    });
  }

  private function adjustForSize(int $value, float $multiplier) : int {
    return intval(ceil($value * $multiplier));
  }

}
