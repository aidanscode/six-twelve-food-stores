@extends('layouts.web')

@section('title', 'Careers')

@section('content')

<div class="container overflow-hidden">

  {{-- Picture of Happy Employee --}}
  <div class="mb-3 mt-5">
	<img src="https://via.placeholder.com/1300x500" class="img-fluid section">
  </div>

  
    {{-- Career Overview --}}
	<div class="mb-5">
		<h1>Careers</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed consectetur adipiscing elit, sed
			consectetur adipiscing elit, seddo eiusmod tempor incididunt utdo eiusmod tempor incididunt ut
			do eiusmod tempor incididunt ut   labore et dolore magna aliqua. labore et dolore magna aliqua.
			labore et dolore magna aliqua.  labore et dolore magna aliqua. labore et dolore magna aliqua.
		</p>
		<a href="{{ route('home.coming_soon') }}" class="btn btn-lg btn-dark d-lg-inline me-lg-3 pt-1">Apply Now</a>
	</div>
	
	{{-- Why --}}
	<div class="mb-5">
		<h1>Why Work at Six-Twelve?</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed consectetur adipiscing elit, sed
			consectetur adipiscing elit, seddo eiusmod tempor incididunt utdo eiusmod tempor incididunt ut
			do eiusmod tempor incididunt ut   labore et dolore magna aliqua. labore et dolore magna aliqua.
			labore et dolore magna aliqua.  labore et dolore magna aliqua. labore et dolore magna aliqua.
		</p>
	</div>

	<div id="accordion" class="mb-5 accordion-flush">
		<div class="accordion-item">
			<div class="accordion-header" id="culture">
			  <h5 class="mb-0">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#culture_collapse" aria-expanded="false" aria-controls="culture_collapse">
				 | Culture
				</button>
			  </h5>
			</div>
			<div id="culture_collapse" class="collapse" aria-labelledby="culture">
			  <div class="accordion-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			  </div>
			</div>
		</div>
		<div class="accordion-item">
			<div class="accordion-header" id="values">
			  <h5 class="mb-0">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#values_collapse" aria-expanded="false" aria-controls="values_collapse">
				 | Our Values
				</button>
			  </h5>
			</div>
			<div id="values_collapse" class="collapse" aria-labelledby="values">
			  <div class="accordion-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			  </div>
			</div>
		</div>
		<div class= "accordion-item">
			<div class="accordion-header" id="benefits">
			  <h5 class="mb-0">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#benefits_collapse" aria-expanded="false" aria-controls="benefits_collapse">
				  | Benefits
				</button>
			  </h5>
			</div>
			<div id="benefits_collapse" class="collapse" aria-labelledby="benefits">
			  <div class="accordion-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection
