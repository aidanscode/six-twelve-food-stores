<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SandwichSize;

class SandwichSizeSeeder extends Seeder {

  public function run() {
    SandwichSize::create([
      'name' => 'Small (8 in.)',
      'image_path' => ''
    ]);

    SandwichSize::create([
      'name' => 'Medium (12 in.)',
      'image_path' => ''
    ]);

    SandwichSize::create([
      'name' => 'Large (18 in.)',
      'image_path' => ''
    ]);
  }

}
