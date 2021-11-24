@extends('layouts.admin')

@section('title', 'Select a Location')

@section('content')
<div class="container mt-3">
  <h1>Select a Location to Get Started!</h1>

  <div class="row mt-5">
    @foreach($locations as $location)
    <div class="col-12 col-md-4 text-center">
      <a class="text-dark text-decoration-none clickable" href="{{ route('location.manage', ['location' => $location]) }}">
        <h1><i class="bi bi-shop"></i></h1>
        <h4>{{ $location->name }}</h4>
        <h6>({{ $location->address }})</h6>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection
