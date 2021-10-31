<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder {

  public function run() {
    Location::create([
      'name' => 'NJ-73, Berlin',
      'address' => '401 NJ-73, Berlin NJ, 08009'
    ]);

    Location::create([
      'name' => 'Central Florida Parkway, Orlando',
      'address' => '5910 Central Florida Pkwy, Orlando FL, 32821'
    ]);
  }

}
