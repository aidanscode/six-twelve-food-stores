@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')

<div class="container mt-3">
	<div class="row">
		<div class="col-12 col-md-6">
			<a href="{{ route('user.index', ['user' => $user]) }}" class="btn btn-dark mb-3">Back to Manage Users</a>
		</div>
		<div class="col-12 col-md-6">
			<button type="button" data-bs-toggle="modal" data-bs-target="#delete-modal" class="btn btn-danger float-md-end">Delete User</button>
		</div>
	</div>
	
	<h1>Edit User</h1>
	
	<form action="{{ route('user.update', ['user' => $user]) }}" method="POST">
		@csrf
		
		<div class="row">
		
		  <div class="col-12 col-md-6">
			<div class="form-group">
			  <label for="email">Email</label>
			  <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}" required />
			</div>
		   </div>
		   
		   	<div class="col-12 col-md-6">
				<div class="form-group">
				  <label for="name">Name</label>
				  <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" required />
				</div>
		   </div>
		   
		   	<div class="col-12 col-md-6">
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="" required />
				</div>
		   </div>
		   
		   <div>
				<button type="submit" class="btn btn-dark mt-3">Update User</button>
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
        <p>Are you sure you want to delete this user?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go Back</button>
        <form action="{{ route('user.delete', ['user' => $user]) }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="DELETE" />
          <button type="submit" class="btn btn-danger">Confirm Deletion</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection