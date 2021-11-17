<?php

namespace Database\Seeders;

use App\Models\IngredientType;
use Illuminate\Database\Seeder;

class IngredientTypesSeeder extends Seeder {

  public function run() {
    IngredientType::create(['id' => IngredientType::TYPE_TEMPERATURE, 'name' => 'Temperature', 'is_flat_matters' => false]);
    IngredientType::create(['id' => IngredientType::TYPE_BREAD_TYPE, 'name' => 'Bread Type', 'is_flat_matters' => true]);
    IngredientType::create(['id' => IngredientType::TYPE_MEAT, 'name' => 'Meat', 'is_flat_matters' => true]);
    IngredientType::create(['id' => IngredientType::TYPE_CHEESE, 'name' => 'Cheese', 'is_flat_matters' => false]);
    IngredientType::create(['id' => IngredientType::TYPE_SPREAD, 'name' => 'Spread', 'is_flat_matters' => false]);
    IngredientType::create(['id' => IngredientType::TYPE_TOPPING, 'name' => 'Topping', 'is_flat_matters' => false]);
  }

}
