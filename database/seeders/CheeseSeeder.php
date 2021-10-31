<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cheese;

class CheeseSeeder extends Seeder {

  public function run() {
    $cheeses = [
      'No Cheese', 'Cheddar', 'American',
      'Provolone', 'Swiss', 'Pepper Jack'
    ];

    foreach($cheeses as $cheese) {
      Cheese::create([
        'name' => $cheese,
        'image_path' => ''
      ]);
    }
  }

}
