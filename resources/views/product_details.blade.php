@extends('layouts.master')

    @section('content')

	@if (Session::has('success'))

	<center><span class='label label-success flash_message'>{{ Session::get('success') }}</span></center><br>

@endif


	<section>
		<div class="container">
			<div class="row">
				@include('partials._sidebar')
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset('/images/home/' . $product->image)}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
								   	<div class="item active">
								   		 @foreach($similar_products as $similar_product)
										  <a href="{{ $similar_product->slug }}"><img src="{{asset('/images/home/' . $similar_product->image)}}" alt="" height="85" width="84"></a>
											@if($loop->iteration==3)
                                     </div>
                                    <div class="item">
                                @endif
								    @endforeach
								    </div>
								</div>
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->

								<!-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> -->
								<span class="red_bg">{{ ucfirst($product_period->period) }}</span>
								<h2>{{ $product->name }}</h2>
								<p>SKU: {{ $product->sku }}</p>

								<!-- <img src="{{asset('/images/product-details/' . 'rating.png')}}" alt="" /> -->


								<div class="rating">

								@php

								for($i = 0 ; $i<(int)$average_rating ; $i++){
								echo "<i class='glyphicon glyphicon-star'></i>";

								 }

								 if(($average_rating-(int)$average_rating)>=.3){
									echo "<i class='glyphicon glyphicon-star half'></i>";
                  ++$i;
								}

                if($i!=0){
                while($i!=5){
									echo "<i class='glyphicon glyphicon-star white-color'></i>";
									$i++;
								}
              }


								@endphp
<!--
  <i class="glyphicon glyphicon-star"></i>
  <i class="glyphicon glyphicon-star"></i>
  <i class="glyphicon glyphicon-star"></i>
  <i class="glyphicon glyphicon-star"></i>
  <i class="glyphicon glyphicon-star half"></i>
-->

</div>

								<span>
									<span>US ${{ $product->price }}</span>
									<label>Quantity:</label>
									<input id="product_quantity_add_to_cart" type="text" value="3" />
									<a id="btnAdd" class="btn btn-fefault cart" onclick="addToCart({{$product->id}},{{$product->sku}},'{{$product->name}}','{{$product->description}}','{{$product->image}}',{{$product->quantity}},{{$product->price}},{{$product->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</span>
								<p><b>Availability:</b> {{ $product->quantity }}</p>
								<p><b>Condition:</b> {{ strtoupper($product_period->period) }}</p>
								<p><b>Brand:</b> {{ $product_brand->name }}</p>
								<a href=""><img src="{{asset('/images/product-details/' . 'share.png')}}" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (@php echo count($userreviews) @endphp)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								{{ $product->description }}
							</div>

							<div class="tab-pane fade" id="companyprofile" >
							 {{ $product_brand->name }}
							</div>

							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">

									@foreach($userreviews as $userreview)

									<ul>
									<li>

											@php

								for($i = 0 ; $i<$userreview->product_rating ; $i++){
								echo "<i class='glyphicon glyphicon-star'></i>";

								 }

								while($i!=5){
									echo "<i class='glyphicon glyphicon-star white-color'></i>";
									$i++;
								}

								@endphp

										</li>
										<li><a href=""><i class="fa fa-user"></i>{{$userreview->name}}</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>{{ $userreview->created_at->format('g:i a') }}</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>{{ $userreview->created_at->format('d F Y') }}</a></li>

									</ul>
									<p>{{ $userreview->review }}</p>

					  @if (!$loop->last)
        <hr>
    @endif

									@endforeach

									<br>
									<p><b>Write Your Review</b></p>

									<form action="{{ route('post.review') }}" method="post">
									<input type="hidden" name="product_id" value="{{ $product->id }}"/>
										<span>
											<input type="text" name="name" placeholder="Your Name"/>
											<input type="email" name="email" placeholder="Email Address"/>
										</span>
										<textarea name="review" ></textarea>



										<input type='hidden' name='product_rating' id="txt" value='1'>

										<table class="demo-table">
<tbody>

<tr>
<td valign="top">

<div id="tutorial-1">
<input type="hidden" name="rating" id="rating" value="1" />
<ul onMouseOut="resetRating(1);">

  <li class='selected' onmouseover="highlightStar(this,1);" onmouseout="removeHighlight(1);" onClick="addRating(this,1);">&#9733;</li>

  <li class='' onmouseover="highlightStar(this,1);" onmouseout="removeHighlight(1);" onClick="addRating(this,1);">&#9733;</li>

  <li class='' onmouseover="highlightStar(this,1);" onmouseout="removeHighlight(1);" onClick="addRating(this,1);">&#9733;</li>

  <li class='' onmouseover="highlightStar(this,1);" onmouseout="removeHighlight(1);" onClick="addRating(this,1);">&#9733;</li>

  <li class='' onmouseover="highlightStar(this,1);" onmouseout="removeHighlight(1);" onClick="addRating(this,1);">&#9733;</li>
  <ul>
</div>

</td>
</tr>

</tbody>
</table>
										<input type="hidden" value="{{ Session::token() }}" name="_token">
										<button type="submit" class="btn btn-default pull-right">
											Submit
										</button>

									</form>
								</div>
							</div>

						</div>
					</div><!--/category-tab-->

					 <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">

                                @foreach($recommended_items as $recommended_item)


                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center"><a href="{{ $recommended_item->slug }}">

                                                <img src="{{ asset("/images/home/{$recommended_item->image}") }}" alt="" />
                                                <h2>${{ $recommended_item->price }}</h2>
                                                <p>{{ $recommended_item->name }}</p>
                                                <a id="btnAdd" class="btn btn-default add-to-cart" onclick="addToCart({{$recommended_item->id}},{{$recommended_item->sku}},'{{$recommended_item->name}}','{{$recommended_item->description}}','{{$recommended_item->image}}',{{$recommended_item->quantity}},{{$recommended_item->price}},{{$recommended_item->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a></a>
                                            </div>

                                            </div>
                                        </div>
                                    </div>

                                     @if($loop->iteration%3==0 && $loop->iteration!=count($recommended_items))

                                     </div>

                                    <div class="item">

                                @endif

                                @endforeach

                                </div>
                            </div>



                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div>
                    </div><!--/recommended_items-->


				</div>
			</div>
		</div>
	</section>

   @endsection
