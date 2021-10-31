<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meat;

class MeatSeeder extends Seeder {

  public function run() {
    $flatMeats = [
      'Ham', 'Turkey',
      'Italian', 'Tuna Salad', 'Chicken Salad',
      'BLT', 'Roast Beef', 'Cheese',
      'Pepperoni', 'Veggie', 'Chicken Strips',
      'Cheesesteak', 'Grilled Chicken', 'Chicken Cheesesteak'
    ];

    foreach($flatMeats as $flatMeat) {
      Meat::create([
        'name' => $flatMeat,
        'image_path' => '',
        'is_flat' => true
      ]);
    }

    Meat::create([
      'name' => 'Meatball',
      'image_path' => '',
      'is_flat' => false
    ]);
  }

}
