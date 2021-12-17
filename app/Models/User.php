<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

use App\Mail\ResetPasswordMail;
use App\Events\NewUserEvent;

class User extends Authenticatable {

  use HasApiTokens, HasFactory, Notifiable;

  protected $fillable = ['name', 'email', 'password', 'force_password_reset'];
  protected $hidden = ['password', 'remember_token'];

  private static function getNewRandomPassword() : string {
    return Str::random(16);
  }

  public static function createNewUser(string $email, string $name) : User {
    $defaultPassword = self::getNewRandomPassword();

    $user = User::create([
      'name' => $name,
      'email' => $email,
      'password' => Hash::make($defaultPassword),
      'force_password_reset' => 1
    ]);
    event(new NewUserEvent($user, $defaultPassword));

    return $user;
  }

  public function resetUserPassword() : void {
    $newPassword = self::getNewRandomPassword();

    $this->password = Hash::make($newPassword);
    $this->force_password_reset = 1;
    $this->save();

    Mail::to($this)->send(new ResetPasswordMail($this, $newPassword));
  }

}
