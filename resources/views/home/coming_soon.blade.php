@extends('layouts.web')

@section('title', 'Page Coming Soon')

@section('content')
<div class="container overflow-hidden">
  <h1 class="display-1 text-center mb-5">This page is coming soon!</h1>

  <div class="mb-5">
    <h1>Check out one of our other pages in the meantime</h1>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <h2><a class="text-dark" href="{{ route('home.index') }}">Home</a></h2>
      </li>
      <li class="list-group-item">
        <h2><a class="text-dark" href="{{ route('home.menu') }}">Full Menu</a></h2>
      </li>
      <li class="list-group-item">
        <h2><a class="text-dark" href="{{ route('builder.index') }}">Meal Builder</a></h2>
      </li>
      <li class="list-group-item">
        <h2><a class="text-dark" href="{{ route('home.contact') }}">Contact</a></h2>
      </li>
      <li class="list-group-item">
        <h2><a class="text-dark" href="{{ route('home.hiring') }}">Job Postings</a></h2>
      </li>
      <li class="list-group-item">
        <h2><a class="text-dark" href="{{ route('home.covid') }}">Covid-19 Store Policies</a></h2>
      </li>
    </ul>
  </div>
</div>
@endsection
