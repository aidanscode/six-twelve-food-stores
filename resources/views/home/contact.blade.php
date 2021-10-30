@extends('layouts.web')

@section('title', 'Contact')

@section('content')

<div class="container overflow-hidden">

	{{-- Get in Touch --}}
	<div class="mb-3 mt-5">
		<div class="text-center mb-3">
			<h1>Get in Touch</h1>
			<h5>Fill out the form below and 6-12 will get back to you shortly.</h5>
		</div>
		<form>
			<div class="row mb-3">
				<div class="col-sm form-group">
					<label for="first_name_input" class="form-label">First Name</label>
					<input type="text" class="form-control" id="first_name_input" aria-describedby="firstname">
				</div>
				<div class="col-sm form-group">
					<label for="last_name_input" class="form-label">Last Name</label>
					<input type="text" class="form-control" id="last_name_input" aria-describedby="lastname">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm form-group">
					<label for="email_address_input" class="form-label">Email Address</label>
					<input type="email" class="form-control" id="email_address_input" aria-describedby="emailaddress">
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				</div>
				<div class="col-sm form-group">
					<label for="phone_number_input" class="form-label">Phone Number</label>
					<input type="tel" class="form-control" id="phone_number_input" aria-describedby="phonenumber">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm form-group">
					<label for="contact-reason-input">Reason</label>
					<select id="contact-reason-input" class="form-control" aria-describedby="contactreason">
						<option selected>Choose...</option>
						<option>Job Posting</option>
						<option>Feedback</option>
						<option>Report a Bug</option>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm form-group">
					<label for="text-area-input">What's up?</label>
					<textarea class="form-control" id="text-area-input" rows="3" aria-describedby="textarea"></textarea>
				</div>
			</div>
			<div class="form-group row mb-3 text-center">
				<div class="col-sm">
				  <button type="submit" class="btn btn-primary">Send</button>
				</div>
			</div>
		</form>
	</div>

</div>

@endsection