@extends('layouts.admin')

@section('title', 'Create Ingredient')

@section('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
    function updateFlatInputBasedOnIngredientType() {
      const ingredientTypeInput = document.getElementById('ingredient_type_id');
      const selectedIngredientType = ingredientTypeInput.options[ingredientTypeInput.selectedIndex].text;
      const flatInputGroup = document.getElementById('flat-input-group');

      if (['Bread Type', 'Meat'].includes(selectedIngredientType)) {
        flatInputGroup.classList.remove('d-none');
        document.getElementById('is_flat_label').innerText = (selectedIngredientType === 'Meat' ? 'Is this meat flat?' : 'Can this bread only hold flat meats?');
      } else {
        flatInputGroup.classList.add('d-none');
        document.getElementById('yes-option').selected = true;
      }
    }

    function displayNutritionFactsBasedOnIngredientType() {
      const ingredientTypeInput = document.getElementById('ingredient_type_id');
      const selectedIngredientType = ingredientTypeInput.options[ingredientTypeInput.selectedIndex].text;
      const nutritionFactsGroup = document.getElementById('nutrition-facts-group');

      if (selectedIngredientType === 'Temperature') {
        nutritionFactsGroup.classList.add('d-none');
      } else {
        nutritionFactsGroup.classList.remove('d-none');
      }
    }

    document.getElementById('ingredient_type_id').addEventListener('change', updateFlatInputBasedOnIngredientType);
    document.getElementById('ingredient_type_id').addEventListener('change', displayNutritionFactsBasedOnIngredientType);

    updateFlatInputBasedOnIngredientType();
    displayNutritionFactsBasedOnIngredientType();
  });
</script>
@endsection

@section('content')
<div class="container mt-3">
  <h1>Create Ingredient</h1>

  <form action="{{ route('ingredient.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Ingredient Name" required />
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="ingredient_type_id">Select an Ingredient Type</label>
          <select type="text" class="form-control" id="ingredient_type_id" name="ingredient_type_id" required>
            @foreach($ingredientTypes as $ingredientType)
            <option value="{{ $ingredientType->id }}">{{ $ingredientType->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div id="flat-input-group" class="col-12 col-md-6 d-none">
        <div class="form-group">
          <label id="is_flat_label" for="is_flat"></label>
          <select type="text" class="form-control" id="is_flat" name="is_flat" required>
            <option id="yes-option" value="true">Yes</option>
            <option id="no-option" value="false">No</option>
          </select>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="image">Display Image</label>
          <input class="form-control" type="file" id="image" name="image" accept=".png, .jpg, .jpeg" required />
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="location_id">Location</label>
          <select class="form-control" id="location_id" name="location_id" required>
            <option value="">Select a Location</option>
            @foreach($locations as $location)
            <option value="{{ $location->id }}">{{ $location->name }} ({{ $location->address }})</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div id="nutrition-facts-group" class="row mt-3 d-none">
      <h5>Nutrition Facts</h5>
      <div class="col-3">
        <div class="form-group">
          <label for="calories">Calories</label>
          <input type="number" class="form-control" min="0" step="1" id="calories" name="calories" placeholder="Calories" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="total_fat">Total Fat (g)</label>
          <input type="number" class="form-control" min="0" step="1" id="total_fat" name="total_fat" placeholder="Total Fat" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="saturated_fat">Saturated Fat (g)</label>
          <input type="number" class="form-control" min="0" step="1" id="saturated_fat" name="saturated_fat" placeholder="Saturated Fat" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="trans_fat">Trans Fat (g)</label>
          <input type="number" class="form-control" min="0" step="1" id="trans_fat" name="trans_fat" placeholder="Trans Fat" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="cholesterol">Cholesterol (mg)</label>
          <input type="number" class="form-control" min="0" step="1" id="cholesterol" name="cholesterol" placeholder="Cholesterol" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="sodium">Sodium (mg)</label>
          <input type="number" class="form-control" min="0" step="1" id="sodium" name="sodium" placeholder="Sodium" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="carbohydrates">Carbohydrates (g)</label>
          <input type="number" class="form-control" min="0" step="1" id="carbohydrates" name="carbohydrates" placeholder="Carbohydrates" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="dietary_fiber">Dietary Fiber (g)</label>
          <input type="number" class="form-control" min="0" step="1" id="dietary_fiber" name="dietary_fiber" placeholder="Dietary Fiber" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="sugars">Sugars (g)</label>
          <input type="number" class="form-control" min="0" step="1" id="sugars" name="sugars" placeholder="Sugars" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="protein">Protein (g)</label>
          <input type="number" class="form-control" min="0" step="1" id="protein" name="protein" placeholder="Protein" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="vitamin_a">Vitamin A (mcg)</label>
          <input type="number" class="form-control" min="0" step="1" id="vitamin_a" name="vitamin_a" placeholder="Vitamin A" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="vitamin_c">Vitamin C (mcg)</label>
          <input type="number" class="form-control" min="0" step="1" id="vitamin_c" name="vitamin_c" placeholder="Vitamin C" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="calcium">Calcium (mg)</label>
          <input type="number" class="form-control" min="0" step="1" id="calcium" name="calcium" placeholder="Calcium" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="iron">Iron (mg)</label>
          <input type="number" class="form-control" min="0" step="1" id="iron" name="iron" placeholder="Iron" />
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-dark mt-3">Create Ingredient</button>
  </form>
</div>
@endsection
