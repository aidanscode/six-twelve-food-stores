@extends('layouts.admin')

@section('title', 'Edit Location')

@section('content')
<div class="container mt-3">
  <a href="{{ route('location.manage', ['location' => $location]) }}" class="btn btn-dark mb-3">Back to Location Menu</a>
  <h1>Edit Location</h1>

  <form action="{{ route('location.update', ['location' => $location]) }}" method="POST">
    @csrf

    <div class="row">
      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="name">Location Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Location Name" value="{{ $location->name }}" required />
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" name="address" class="form-control" placeholder="Address" value="{{ $location->address }}" required />
        </div>
      </div>

      <div>
        <button type="submit" class="btn btn-dark mt-3">Update Location</button>
      </div>
    </div>
  </form>
</div>
@endsection
