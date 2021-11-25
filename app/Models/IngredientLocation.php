<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class IngredientLocation extends Pivot {

  public function ingredient() {
    return $this->belongsTo(Ingredient::class);
  }

}
