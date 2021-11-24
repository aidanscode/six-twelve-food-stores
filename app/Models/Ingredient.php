<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Storage;
class Ingredient extends Model {

  const DEFAULT_IMAGE_DIR = 'images\ingredients\default';
  const CUSTOM_IMAGE_DIR = 'images\ingredients\upload';

  public function nutritionFacts() {
    return $this->hasOne(NutritionFact::class, 'ingredient_id');
  }

  public function ingredientType() {
    return $this->belongsTo(IngredientType::class);
  }

  public function ingredientLocations() {
    return $this->hasMany(IngredientLocation::class);
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

  public function deleteImageIfCustomUpload() {
    $isCurrentImageACustomImage = str_starts_with(self::CUSTOM_IMAGE_DIR, $this->getImagePath());
    if ($isCurrentImageACustomImage) {
      Storage::delete($this->getImagePath());
    }
  }

  public function updateImageFile(UploadedFile $uploadedFile) {
    $this->deleteImageIfCustomUpload();

    $path = $uploadedFile->storeAs(self::CUSTOM_IMAGE_DIR, $uploadedFile->hashName());
    $this->image_path = $path;
    $this->save();
  }

  public function fullyDelete() {
    $this->deleteImageIfCustomUpload();
    $this->nutritionFacts()->delete();
    $this->ingredientLocations()->delete();
    $this->delete();
  }

}
