<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model {

  public function nutritionFacts() {
    return $this->hasOne(NutritionFact::class, 'ingredient_id');
  }

  public function ingredientType() {
    return $this->belongsTo(IngredientType::class);
  }

  public function getName() : string {
    return $this->name;
  }

  public function getImagePath() : string {
    return $this->image_path;
  }

  public function getImageDisplayUrl() : string {
    return route('ingredient.photo', ['id' => $this->id]);
  }

  public function getApiStructuredData() : array {
    return [
      'id' => $this->id,
      'name' => $this->getName(),
      'is_flat' => $this->is_flat,
      'image_url' => $this->getImageDisplayUrl(),
      'nutrition_facts' => $this->nutritionFacts->attributesToArray(),
      'ingredient_type' => [
        'name' => $this->ingredientType->name,
        'is_flat_matters' => $this->ingredientType->is_flat_matters,
      ]
    ];
  }

}
