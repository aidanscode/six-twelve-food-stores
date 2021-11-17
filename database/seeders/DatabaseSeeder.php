<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

  public function run() {
    $this->call(IngredientTypesSeeder::class);
    $this->call(LocationSeeder::class);
    $this->call(TemperatureSeeder::class);
    $this->call(BreadTypeSeeder::class);
    $this->call(MeatSeeder::class);
    $this->call(CheeseSeeder::class);
    $this->call(SpreadSeeder::class);
    $this->call(ToppingSeeder::class);
    $this->call(IngredientLocationSeeder::class);
  }

}
