<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

  public function up() {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('email');
      $table->string('name');
      $table->string('password', 100);
      $table->string('remember_token', 100)->nullable();
      $table->boolean('force_password_reset');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('users');
  }

}
