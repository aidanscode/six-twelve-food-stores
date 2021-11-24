<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder {

  public function run() {
    User::create([
      'email' => 'admin@sixtwelve.com',
      'name' => 'Admin',
      'password' => Hash::make('password'),
      'force_password_reset' => 1
    ]);
  }

}
