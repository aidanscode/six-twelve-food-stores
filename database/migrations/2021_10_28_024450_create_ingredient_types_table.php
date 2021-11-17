<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientTypesTable extends Migration {

  public function up() {
    Schema::create('ingredient_types', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->boolean('is_flat_matters');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('ingredient_types');
  }

}
