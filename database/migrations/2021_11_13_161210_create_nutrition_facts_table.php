<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionFactsTable extends Migration {

  public function up() {
    Schema::create('nutrition_facts', function (Blueprint $table) {
      $table->id();
      $table->foreignId('ingredient_id');
      $table->unsignedInteger('calories');
      $table->unsignedInteger('total_fat');
      $table->unsignedInteger('saturated_fat');
      $table->unsignedInteger('trans_fat');
      $table->unsignedInteger('cholesterol');
      $table->unsignedInteger('sodium');
      $table->unsignedInteger('carbohydrates');
      $table->unsignedInteger('dietary_fiber');
      $table->unsignedInteger('sugars');
      $table->unsignedInteger('protein');
      $table->unsignedInteger('vitamin_a');
      $table->unsignedInteger('vitamin_c');
      $table->unsignedInteger('calcium');
      $table->unsignedInteger('iron');
      $table->timestamps();

      $table->foreign('ingredient_id')->references('id')->on('ingredients');
    });
  }

  public function down() {
    Schema::dropIfExists('nutrition_facts');
  }

}
