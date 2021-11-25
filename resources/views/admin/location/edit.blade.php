@extends('layouts.admin')

@section('title', 'Edit Location')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-12 col-md-6">
      <a href="{{ route('location.manage', ['location' => $location]) }}" class="btn btn-dark mb-3">Back to Location Menu</a>
    </div>
    <div class="col-12 col-md-6">
      <button type="button" data-bs-toggle="modal" data-bs-target="#delete-modal" class="btn btn-danger float-md-end">Delete Location</button>
    </div>
  </div>
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

<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete-modal-label">Delete Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this location?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go Back</button>
        <form action="{{ route('location.delete', ['location' => $location]) }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="DELETE" />
          <button type="submit" class="btn btn-danger">Confirm Deletion</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
