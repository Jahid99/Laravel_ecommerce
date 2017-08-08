@extends('layouts.master')

@section('content')
<div class="container">
	@if (count($errors)>0)

	<div class="alert alert-danger" role="alert">
		
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>

@endif
</div>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-6 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								
								<form method="post" action="{{ route('checkout.store') }}" accept-charset="UTF-8">
									<input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name">
									<input type="text" name="email" value="{{ old('email') }}" placeholder="Email*">
									<input type="text" name="title" value="{{ old('title') }}" placeholder="Title">
									<input type="text" name="f_name" value="{{ old('f_name') }}" placeholder="First Name *">
									<input type="text" name="m_name" value="{{ old('m_name') }}" placeholder="Middle Name">
									<input type="text" name="l_name" value="{{ old('l_name') }}" placeholder="Last Name *">
									<input type="text" name="address_1" value="{{ old('address_1') }}" placeholder="Address 1 *">
									<input type="text" name="address_2" value="{{ old('address_2') }}" placeholder="Address 2">
								
							</div>
							<div class="form-two">
								
									<input name="zip_code" value="{{ old('zip_code') }}" type="text" placeholder="Zip / Postal Code *">
									<select name="country"  value="{{ old('country') }}">
										<option value="0">-- Country --</option>
										<option value="United States">United States</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="UK">UK</option>
										<option value="India">India</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Ucrane">Ucrane</option>
										<option value="Canada">Canada</option>
										<option value="Dubai">Dubai</option>
									</select>
									<select name="state"  value="{{ old('state') }}">
										<option value="0">-- State / Province / Region --</option>
										<option value="United States">United States</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="UK">UK</option>
										<option value="India">India</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Ucrane">Ucrane</option>
										<option value="Canada">Canada</option>
										<option value="Dubai">Dubai</option>
									</select>
									<input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone *">
									<input type="text" name="mobile_number" value="{{ old('mobile_number') }}" placeholder="Mobile Phone">
									<input type="text" name="fax" value="{{ old('fax') }}" placeholder="Fax">
								
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="notes" value="{{ old('notes') }}" placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							<label><input type="checkbox" value="yes" name="shipping_to_bill_address"> Shipping to bill address</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						
					</thead>
					<tbody>
						
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td><span>$<span id="cart_sub_total">59</span></span></td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td><span>$<span id="eco_tax">2</span></span></td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td><span>Free</span></td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$<span id="cart_sub_total_with_tax">61</span></span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="payment-options">
					

					<input type="hidden" id="cart_sub_total_get" name="cart_sub_total" value="1">
					<input type="hidden" id="eco_tax_get" name="eco_tax" value="6">
					<input type="hidden" id="cart_sub_total_with_tax_get" name="cart_sub_total_with_tax" value="3">
					<input type="hidden" name="payment_method" value="online">
					<input type="hidden" name="status" value="pending">
					<input type="hidden" id="all_cart_product_details" name="all_cart_product_details" value="">
					<input type="hidden" name="shipping_cost" value="0">
					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>

					<center><button type="submit" class="btn btn-default check_out">
											Submit
										</button></center>
					</form>

		</div>

	</section> <!--/#cart_items-->


	

	@endsection