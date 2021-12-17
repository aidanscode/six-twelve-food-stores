<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

use App\Events\NewUserEvent;

class User extends Authenticatable {

  use HasApiTokens, HasFactory, Notifiable;

  protected $fillable = ['name', 'email', 'password', 'force_password_reset'];
  protected $hidden = ['password', 'remember_token'];

  public static function createNewUser(string $email, string $name) : User {
    $defaultPassword = Str::random(16);

    $user = User::create([
      'name' => $name,
      'email' => $email,
      'password' => Hash::make($defaultPassword),
      'force_password_reset' => 1
    ]);
    event(new NewUserEvent($user, $defaultPassword));

    return $user;
  }

}
