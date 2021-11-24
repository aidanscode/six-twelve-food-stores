@extends('layouts.admin')

@section('title', 'Edit Ingredient')

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
  <div class="row">
    <div class="col-12 col-md-6">
      <h1>Edit Ingredient</h1>
    </div>
    <div class="col-12 col-md-6">
      <button type="button" class="btn btn-danger float-md-end" data-bs-toggle="modal" data-bs-target="#delete-modal">Delete Ingredient</button>
    </div>
  </div>

  <form action="{{ route('ingredient.update', ['ingredient' => $ingredient]) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Ingredient Name" value="{{ $ingredient->name }}" required />
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="ingredient_type_id">Select an Ingredient Type</label>
          <select type="text" class="form-control" id="ingredient_type_id" name="ingredient_type_id" required>
            @foreach($ingredientTypes as $ingredientType)
            <option value="{{ $ingredientType->id }}" {{ $ingredient->ingredient_type_id === $ingredientType->id ? 'selected' : '' }}>{{ $ingredientType->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div id="flat-input-group" class="col-12 col-md-6 d-none">
        <div class="form-group">
          <label id="is_flat_label" for="is_flat"></label>
          <select type="text" class="form-control" id="is_flat" name="is_flat" required>
            <option id="yes-option" value="true" {{ $ingredient->is_flat ? 'selected' : '' }}>Yes</option>
            <option id="no-option" value="false" {{ (!$ingredient->is_flat) ? 'selected' : '' }}>No</option>
          </select>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="image">Display Image (Only select if changing image)</label>
          <input class="form-control" type="file" id="image" name="image" accept=".png, .jpg, .jpeg" />
        </div>
      </div>
    </div>

    <div id="nutrition-facts-group" class="row mt-3 d-none">
      <h5>Nutrition Facts</h5>
      <div class="col-3">
        <div class="form-group">
          <label for="calories">Calories</label>
          <input value="{{ $ingredient->nutritionFacts->calories }}" type="number" class="form-control" min="0" step="1" id="calories" name="calories" placeholder="Calories" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="total_fat">Total Fat (g)</label>
          <input value="{{ $ingredient->nutritionFacts->total_fat }}" type="number" class="form-control" min="0" step="1" id="total_fat" name="total_fat" placeholder="Total Fat" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="saturated_fat">Saturated Fat (g)</label>
          <input value="{{ $ingredient->nutritionFacts->saturated_fat }}" type="number" class="form-control" min="0" step="1" id="saturated_fat" name="saturated_fat" placeholder="Saturated Fat" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="trans_fat">Trans Fat (g)</label>
          <input value="{{ $ingredient->nutritionFacts->trans_fat }}" type="number" class="form-control" min="0" step="1" id="trans_fat" name="trans_fat" placeholder="Trans Fat" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="cholesterol">Cholesterol (mg)</label>
          <input value="{{ $ingredient->nutritionFacts->cholesterol }}" type="number" class="form-control" min="0" step="1" id="cholesterol" name="cholesterol" placeholder="Cholesterol" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="sodium">Sodium (mg)</label>
          <input value="{{ $ingredient->nutritionFacts->sodium }}" type="number" class="form-control" min="0" step="1" id="sodium" name="sodium" placeholder="Sodium" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="carbohydrates">Carbohydrates (g)</label>
          <input value="{{ $ingredient->nutritionFacts->carbohydrates }}" type="number" class="form-control" min="0" step="1" id="carbohydrates" name="carbohydrates" placeholder="Carbohydrates" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="dietary_fiber">Dietary Fiber (g)</label>
          <input value="{{ $ingredient->nutritionFacts->dietary_fiber }}" type="number" class="form-control" min="0" step="1" id="dietary_fiber" name="dietary_fiber" placeholder="Dietary Fiber" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="sugars">Sugars (g)</label>
          <input value="{{ $ingredient->nutritionFacts->sugars }}" type="number" class="form-control" min="0" step="1" id="sugars" name="sugars" placeholder="Sugars" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="protein">Protein (g)</label>
          <input value="{{ $ingredient->nutritionFacts->protein }}" type="number" class="form-control" min="0" step="1" id="protein" name="protein" placeholder="Protein" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="vitamin_a">Vitamin A (mcg)</label>
          <input value="{{ $ingredient->nutritionFacts->vitamin_a }}" type="number" class="form-control" min="0" step="1" id="vitamin_a" name="vitamin_a" placeholder="Vitamin A" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="vitamin_c">Vitamin C (mcg)</label>
          <input value="{{ $ingredient->nutritionFacts->vitamin_c }}" type="number" class="form-control" min="0" step="1" id="vitamin_c" name="vitamin_c" placeholder="Vitamin C" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="calcium">Calcium (mg)</label>
          <input value="{{ $ingredient->nutritionFacts->calcium }}" type="number" class="form-control" min="0" step="1" id="calcium" name="calcium" placeholder="Calcium" />
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="iron">Iron (mg)</label>
          <input value="{{ $ingredient->nutritionFacts->iron }}" type="number" class="form-control" min="0" step="1" id="iron" name="iron" placeholder="Iron" />
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-dark mt-3">Update Ingredient</button>
  </form>
</div>

<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete-modal-label">Delete Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this ingredient?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go Back</button>
        <form action="{{ route('ingredient.delete', ['ingredient' => $ingredient]) }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="DELETE" />
          <button type="submit" class="btn btn-danger">Confirm Deletion</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
