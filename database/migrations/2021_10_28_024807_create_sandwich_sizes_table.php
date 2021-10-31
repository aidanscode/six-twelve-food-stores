<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSandwichSizesTable extends Migration {

  public function up() {
    Schema::create('sandwich_sizes', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('image_path');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('sandwich_sizes');
  }

}
