<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration {

  public function up() {
    Schema::create('ingredients', function (Blueprint $table) {
      $table->id();
      $table->foreignId('ingredient_type_id');
      $table->string('name');
      $table->boolean('is_flat');
      $table->string('image_path');
      $table->timestamps();

      $table->foreign('ingredient_type_id')->references('id')->on('ingredient_types');
    });
  }

  public function down() {
    Schema::dropIfExists('ingredients');
  }

}
