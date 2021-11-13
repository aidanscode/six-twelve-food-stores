<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NutritionFact;
use App\Models\BreadType;

class BreadTypeSeeder extends Seeder {

  public function run() {
    $sizes = collect(['Small (8 in)', 'Medium (12 in)', 'Large (18 in)']);

    //White breads
    $sizes->each(function(string $sizeString, int $index) {
      $white = BreadType::create([
        'name' => 'White ' . $sizeString,
        'image_path' => '',
        'is_flat' => false
      ]);
      $sizeMultiplier = $this->getSizeMultiplier($index);

      NutritionFact::create([
        'ingredient_id' => $white->id,
        'ingredient_class' => BreadType::class,
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
    $sizes->each(function(string $sizeString, int $index) {
      $wheat = BreadType::create([
        'name' => 'Wheat ' . $sizeString,
        'image_path' => '',
        'is_flat' => false
      ]);
      $sizeMultiplier = $this->getSizeMultiplier($index);
      NutritionFact::create([
        'ingredient_id' => $wheat->id,
        'ingredient_class' => BreadType::class,
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
    $sizes->each(function(string $sizeString, int $index) {
      $flat = BreadType::create([
        'name' => 'Flat ' . $sizeString,
        'image_path' => '',
        'is_flat' => true
      ]);
      $sizeMultiplier = $this->getSizeMultiplier($index);
      NutritionFact::create([
        'ingredient_id' => $flat->id,
        'ingredient_class' => BreadType::class,
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

  private function getSizeMultiplier(int $size) : float {
    if ($size === 0)
      return 2/3;
    elseif ($size === 1)
      return 1;
    elseif ($size === 2)
      return 3/2;
  }

  private function adjustForSize(int $value, float $multiplier) : int {
    return intval(ceil($value * $multiplier));
  }

}
