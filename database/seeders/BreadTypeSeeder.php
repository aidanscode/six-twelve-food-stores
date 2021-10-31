<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BreadType;

class BreadTypeSeeder extends Seeder {

  public function run() {
    BreadType::create([
      'name' => 'Classic',
      'image_path' => '',
      'is_flat' => false
    ]);

    BreadType::create([
      'name' => 'Wheat',
      'image_path' => '',
      'is_flat' => false
    ]);

    BreadType::create([
      'name' => 'White',
      'image_path' => '',
      'is_flat' => false
    ]);

    BreadType::create([
      'name' => 'Flat',
      'image_path' => '',
      'is_flat' => true
    ]);
  }

}
