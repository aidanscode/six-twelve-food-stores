@extends('layouts.admin')

@section('title', 'Manage Location')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-12 col-md-6">
      <h1>Manage Location</h1>
    </div>
    <div class="col-12 col-md-6">
      <a href="{{ route('location.edit', ['location' => $location]) }}" class="btn btn-dark float-md-end mt-2">Edit Location</a>
      <a href="{{ route('ingredient.create') }}" class="btn btn-dark float-md-end mt-2 me-md-2">Add Ingredient</a>
    </div>
  </div>

  <h2>{{ $location->name }}'s Menu</h2>
  @foreach($location->getGroupedMenu() as $ingredientCategory => $ingredients)
    <h4>{{ $ingredientCategory }}</h4>
    <div class="row">
      @foreach($ingredients as $ingredient)
        <div class="col-12 col-md-3 text-center">
          <a class="text-dark text-decoration-none clickable" href="{{ route('ingredient.edit', ['ingredient' => $ingredient]) }}">
            <img class="img-fluid" src="{{ $ingredient->getImageDisplayUrl() }}" style="height: 200px;" />
            <h6>{{ $ingredient->name }}</h6>
          </a>
        </div>
      @endforeach
    </div>
  @endforeach
</div>
@endsection
