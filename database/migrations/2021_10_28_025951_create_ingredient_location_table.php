<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientLocationTable extends Migration {

  public function up() {
    Schema::create('ingredient_location', function (Blueprint $table) {
      $table->id();
      $table->foreignId('ingredient_id');
      $table->foreignId('location_id');
      $table->timestamps();

      $table->foreign('ingredient_id')->references('id')->on('ingredients');
      $table->foreign('location_id')->references('id')->on('locations');
    });
  }

  public function down() {
    Schema::dropIfExists('ingredients_locations');
  }

}
