@extends('layouts.web')

@section('title', 'Home')

@section('content')
<div class="container overflow-hidden">
  {{-- Hero text --}}
  <div class="row section mt-4">
    <div class="col-12 col-md-6 offset-md-3">
      <h1 class="text-center fw-bold">
        The new Meal Builder is here. Craft your perfect sandwich, with only the freshest ingredients of course.
      </h1>
    </div>
  </div>

  {{-- Hero image --}}
  <div class="text-center">
	<img src="{{ asset('images\homebanner.png') }}" class="img-fluid section">
  </div>
 
  
  {{-- Alerts --}}
  <div class="alert alert-secondary alert-dismissible fade show d-flex align-items-center" role="alert">
	 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
		<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
	</svg>
	<div>
		6-12 is dedicated to ensuring the safety of all it's customers and employees.  <a href="{{ route('home.covid') }}" class="alert-link">Click here</a> for our updated mask policy.
	</div>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"/>
  </div>
  
  {{-- Simple Menu --}}
  <div id="menu" class="section">
    <div class="row gy-5">
      <div class="col-12 col-md-6">
        <div class="w-md-75">
          @include('includes.menu-simple')
        </div>
      </div>

      <div class="col-12 col-md-6">
        <img src="{{ asset('images\menu-promo-pic-cropped.jpg') }}" class="img-fluid section float-end">
      </div>
    </div>
  </div>
  
  {{-- About --}}
  <div id="about" class="section">
    <div class="row">
      <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-start">
        <div id="carousel_about" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="{{ asset('images\carousel\Carousel1.jpg') }}">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="{{ asset('images\carousel\Carousel2.jpg') }}">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 h-100" src="{{ asset('images\carousel\Carousel3.png') }}">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel_about" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carousel_about" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div>
      </div>
      <div class="col-12 col-md-6 order-1 order-md-2">
        <h4>About</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Non consectetur a erat nam at lectus urna duis. Sit amet aliquam id diam maecenas ultricies mi eget mauris.
          Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend.
          Dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt.
          Sodales ut etiam sit amet nisl purus in mollis nunc. Mus mauris vitae ultricies leo.
          Tempus urna et pharetra pharetra massa. Amet aliquam id diam maecenas ultricies.
          Tortor posuere ac ut consequat.
          Pharetra diam sit amet nisl suscipit adipiscing bibendum est.
        </p>
      </div>
    </div>
  </div>

  {{-- Contact Us (Hero Image) --}}
  <div class="section">
    <div class="hero-container">
      <img class="img-fluid p-0" src="{{ asset('images\pan.png') }}" />
      <div class="hero-text text-center">
        <h2 class="text-white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </h2>
        <button class="btn btn-light btn-lg">Contact</button>
      </div>
    </div>
  </div>

  {{-- Info Boxes --}}
  <div class="section">
    <div class="row g-4">
      <div class="col-12">
        <div class="bg-dark text-light text-center p-3">
          <h5>Due to shipping delays, some advertised items may not be available for purchase.</h5>
          <h5>We apologize for any inconvenience.</h5>
          <h5><a href="{{ route('home.shipping') }}" class="text-light">Learn more</a></h5>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="bg-dark text-light p-3">
          <h3>Love 6-12 Food Stores? We're hiring!</h3>
          <h5>Store and warehouse jobs available.<br />Apply online today!</h5>
          <h3><a href="{{ route('home.hiring') }}" class="text-light">See Postings</a></h3>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="bg-dark text-light p-3">
          <h3>Our Promise</h3>
          <h5>We are committed to only serving fresh ingredients from farms in our community.</h5>
          <h3><a href="{{ route('home.fresh') }}" class="text-light">Learn more</a></h3>
        </div>
      </div>

      <div class="col-12">
        <div class="bg-dark text-light p-3 h-100 mb-3">
          &nbsp;
          <h3 class="float-none float-lg-start">Updated Mask Policy</h3>
          <h3 class="float-none float-lg-end mb-0">
            Covid-19 store safety update.
            <a href="{{ route('home.covid') }}" class="text-light">Learn more</a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
