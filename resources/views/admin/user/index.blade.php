@extends('layouts.admin')

@section('title', 'Manage Users')

@section('content')

<div class="container mt-3">
	<div class="row">
		<div class="col-12 col-md-6">
			<h1>Manage Users</h1>
		</div>
		<div class="col-12 col-md-6">
			<a href="{{ route('user.create') }}" class="btn btn-dark float-md-end">Create User</a>
		</div>
	</div>
	
	<div class="row mt-3">
		@foreach($users as $user)
		<div class="col-12 col-md-4 text-center">
			<a class="text-dark text-decoration-none clickable" href="{{ route('user.edit', ['user' => $user]) }}">
				<h1><i class="bi bi-person-badge"></i></h1>
				<h4>{{ $user->email }}</h4>
				<h6>({{ $user->name }})</h6>
			</a>
		</div>
		@endforeach
	</div>
</div>

@endsection