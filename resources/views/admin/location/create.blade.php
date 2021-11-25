@extends('layouts.admin')

@section('title', 'Create Location')

@section('content')
<div class="container mt-3">
  <a href="{{ route('location.index') }}" class="btn btn-dark mb-3">Back to Locations List</a>
  <h1>Create Location</h1>

  <form action="{{ route('location.store') }}" method="POST">
    @csrf

    <div class="row">
      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="name">Location Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Location Name" required />
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" name="address" class="form-control" placeholder="Address" required />
        </div>
      </div>

      <div>
        <button type="submit" class="btn btn-dark mt-3">Create Location</button>
      </div>
    </div>
  </form>
</div>
@endsection
