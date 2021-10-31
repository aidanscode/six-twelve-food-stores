<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Temperature;

class TemperatureSeeder extends Seeder {

  public function run() {
    Temperature::create([
      'name' => 'Plain',
      'image_path' => ''
    ]);

    Temperature::create([
      'name' => 'Toasted Bread',
      'image_path' => ''
    ]);
  }

}
