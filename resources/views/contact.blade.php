@extends('layouts.master')

@section('content')


<section id="contact">
			<div class="section-content">
				<center><h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1></center>
				<br>
			</div>

			<div class="contact-section">
			<div class="container">
				@if (Session::has('success'))

		<div class="alert alert-success" role="alert">
			<strong>Success:</strong>{{ Session::get('success') }}
		</div>

	@endif
				<form method="post" action="{{ route('contact.store') }}" accept-charset="UTF-8">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" id="" name="name" placeholder=" Enter Name" required>
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder=" Enter Email id" required>
					  	</div>
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.</label>
					    	<input type="number" class="form-control" id="telephone" name="mobile" placeholder=" Enter 10-digit mobile no." required>
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" id="description" name="message" placeholder="Enter Your Message" required></textarea>
			  			</div>
			  			<div>
								<input name="_token" type="hidden" value="{{ csrf_token() }}"/>

								<button type="submit" class="btn btn-default submit">
														Send Message
													</button>
			  			</div>

					</div>
				</form>
			</div>
		</section><br>





@endsection
