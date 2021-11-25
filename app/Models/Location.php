<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Location extends Model {

  protected $fillable = [
    'name', 'address'
  ];

  public function ingredientLocations() {
    return $this->hasMany(IngredientLocation::class);
  }

  public function menu() {
    return $this->belongsToMany(Ingredient::class, 'ingredient_location', 'location_id', 'ingredient_id')
      ->using(IngredientLocation::class);
  }

  public function getMenuUrl() : string {
    return route('api.locations.menu', ['id' => $this->id]);
  }

  public function getGroupedMenu() : Collection {
    $this->load('menu.nutritionFacts', 'menu.ingredientType');

    return $this->menu->groupBy(fn(Ingredient $ingredient) => $ingredient->ingredientType->name);
  }

  public function getStructuredMenu() : Collection {
    $groupedMenu = $this->getGroupedMenu();
    $structured = collect();
    foreach($groupedMenu as $categoryName => $ingredients) {
      $structured[$categoryName] = $ingredients->map(fn(Ingredient $ingredient) => $ingredient->getApiStructuredData());
    }

    return $structured;
  }

  public function fullyDelete() : void {
    $this->load(
      'ingredientLocations.ingredient.ingredientLocations',
      'ingredientLocations.ingredient.nutritionFacts'
    );
    $ingredients = $this->ingredientLocations->pluck('ingredient');

    $ingredients->each(function(Ingredient $ingredient) {
      $ingredient->ingredientLocations()->where('location_id', $this->id)->delete();
      if ($ingredient->ingredientLocations->count() === 1)
        $ingredient->fullyDelete();
    });

    $this->delete();
  }

}
