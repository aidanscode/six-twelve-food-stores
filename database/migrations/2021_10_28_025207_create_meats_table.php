<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeatsTable extends Migration {

  public function up() {
    Schema::create('meats', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('image_path');
      $table->boolean('is_flat');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('meats');
  }

}
