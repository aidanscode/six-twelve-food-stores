@extends('layouts.admin')

@section('title', 'Reset Password')

@section('content')

<div class="container mt-3">
	<h1>Reset Your Password</h1>
	
	<form action="{{ route('user.update_password', ['user' => $user]) }}" method="POST">
		@csrf
		<div class="row">
		   	<div class="col-12 col-md-6">
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="" required />
				</div>
		   </div>
		   
		   <div>
				<button type="submit" class="btn btn-dark mt-3">Reset Password</button>
			</div>
		</div>
	</form>
</div>
@endsection