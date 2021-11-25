@extends('layouts.admin')

@section('title', 'Create User')

@section('content')
<div class="container mt-3">
	<a href="{{ route('user.index') }}" class="btn btn-dark mb-3">Back to Manage Users</a>
	<h1>Create User</h1>
	
	<form action="{{ route('user.store') }}" method="POST">
		@csrf
		
		<div class="row">
		
		  <div class="col-12 col-md-6">
			<div class="form-group">
			  <label for="email">Email</label>
			  <input type="text" id="email" name="email" class="form-control" placeholder="Email" required />
			</div>
		   </div>
		   
		   	<div class="col-12 col-md-6">
				<div class="form-group">
				  <label for="name">Name</label>
				  <input type="text" id="name" name="name" class="form-control" placeholder="Name" required />
				</div>
		   </div>
		   
		   	<div class="col-12 col-md-6">
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
				</div>
		   </div>
		   
		   <div>
				<button type="submit" class="btn btn-dark mt-3">Create User</button>
			</div>
		</div>
	</form>
</div>
@endsection