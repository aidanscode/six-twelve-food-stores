<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topping;

class ToppingSeeder extends Seeder {

  public function run() {
    $toppings = [
      'Lettuce', 'Tomato', 'Onion',
      'Pickles', 'Sweet Peppers', 'Hot Peppers',
      'Cucumbers', 'Jalapenos', 'Grated Parmesan',
      'Salt', 'Pepper', 'Old Bay',
      'Oregano'
    ];

    foreach($toppings as $topping) {
      Topping::create([
        'name' => $topping,
        'image_path' => ''
      ]);
    }
  }

}
