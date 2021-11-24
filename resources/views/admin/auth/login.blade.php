@extends('layouts.stripped')

@section('title', 'Log In')

@section('content')
<div class="mt-5 row">
  <div class="col-12 col-md-6 offset-md-3">
    <div class="text-center">
      <h1>@include('includes.brand-name')</h1>
    </div>

    <div class="container border bg-secondary-light rounded py-5">
      <h5>Welcome! Please log in to get started</h5>
      @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ $errors->first() }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <form action="{{ route('admin.auth.login.submit') }}" method="POST">
        @csrf

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" required />
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" required />
        </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Log In</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
