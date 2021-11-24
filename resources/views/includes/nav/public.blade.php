<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <div class="row w-100">
      <div class="col-12 col-lg-4 order-2 order-lg-1 text-center text-lg-left mt-lg-2">
        <a href="{{ route('home.menu') }}" class="btn btn-lg btn-dark d-lg-inline me-lg-3">Full Menu</a>
        <a href="{{ route('builder.index') }}" class="btn btn-lg btn-dark d-lg-inline">Meal Builder</a>
      </div>

      <div class="col-12 col-lg-4 text-center order-1 order-lg-2">
        <h2><a class="text-decoration-none" href="{{ route('home.index') }}">@include('includes.brand-name')</a></h2>
      </div>

      <div class="col-12 col-lg-4 order-3 text-center text-lg-left mt-1 mt-lg-0">
        <a href="{{ route('home.contact') }}" class="btn btn-lg btn-dark float-lg-end">Contact</a>
      </div>
    </div>
  </div>
</nav>
