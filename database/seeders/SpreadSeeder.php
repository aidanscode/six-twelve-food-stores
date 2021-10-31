<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Spread;

class SpreadSeeder extends Seeder {

  public function run() {
    $spreads = [
      'Mayo', 'Oil', 'Ranch Dressing',
      'Buffalo Sauce', 'Creamy Chipotle', 'Miracle Whip',
      'Spicy Mustard', 'Yellow Mustard', 'Ketchup',
      'BBQ Sauce', 'Garlic Aioli', 'Honey Hot',
      'Honey Mustard', 'Spicy Cherry Pepper Relish'
    ];

    foreach($spreads as $spread) {
      Spread::create([
        'name' => $spread,
        'image_path' => ''
      ]);
    }
  }

}
