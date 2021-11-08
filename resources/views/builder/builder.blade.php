@extends('layouts.web')

@section('title', 'Meal Builder')

@section('scripts')
<script src="{{ asset('js/builder.js') }}"></script>
@endsection

@section('content')
<div class="container overflow-hidden">
  <h1>Welcome to the Meal Builder!</h1>
  <div id="builder-content"></div>
</div>
@endsection
