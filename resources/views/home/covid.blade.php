@extends('layouts.web')

@section('title', 'Home')

@section('content')
<div class="container overflow-hidden">
  <h1 class="mb-5">Covid-19 Store Policies</h1>

  <h4>In order to best ensure the health and safety of our customers and workers during Covid-19, our stores have implemented the following policies:</h4>
  <ul>
    <li><h5>Face masks are recommended for all customers and workers.</h5></li>
    <li><h5>Workers who test positive for Covid-19 will not be permitted to work until they test negatively.</h5></li>
    <li><h5>Customers who are experiencing symptoms of Covid-19 are asked not to enter the store.</h5></li>
    <li><h5>We are offering a $100 bonus to all workers who receive the Covid-19 vaccine.</h5></li>
    <li><h5>We have implemented extensive, regular cleaning practices throughout the store.</h5></li>
    <li><h5>All employees are required to wash their hands regularly, and food-handling employees are tested each shift.</h5></li>
  </ul>

  <h4 class="mt-5">We know this are difficult times for many and we thank you for trusting us to serve you.</h4>
  <h4>Your safety is of the upmost importance to us and we are doing everything we can to ensure a positive experience for all of our customers.</h4>

  <h4 class="mt-5">Check out some of our other pages?</h4>
  <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <h5><a class="text-dark" href="{{ route('home.index') }}">Home</a></h5>
      </li>
      <li class="list-group-item">
        <h5><a class="text-dark" href="{{ route('home.menu') }}">Full Menu</a></h5>
      </li>
      <li class="list-group-item">
        <h5><a class="text-dark" href="{{ route('builder.index') }}">Meal Builder</a></h5>
      </li>
    </ul>
</div>
@endsection
