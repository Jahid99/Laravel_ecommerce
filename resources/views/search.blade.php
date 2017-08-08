@extends('layouts.master')

@section('content')

    <section id="advertisement">
    		<div class="container">
    			<img src="images/shop/advertisement.jpg" alt="" />
    		</div>
    	</section>

    	<section>
    		<div class="container">
    			<div class="row">
    				@include('partials._sidebar')

    				<div class="col-sm-9 padding-right">
    					<div class="features_items"><!--features_items-->
    						<h2 class="title text-center">Features Items</h2>

                @if(isset($products))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>

    						 @foreach($products as $product)

                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/{{ $product->image }}" alt="" />
                                                <h2>${{ $product->price }}</h2>
                                                <p>{{ $product->name }}</p>
                                                <a id="btnAdd" class="btn btn-default add-to-cart" onclick="addToCart({{$product->id}},{{$product->sku}},'{{$product->name}}','{{$product->description}}','{{$product->image}}',{{$product->quantity}},{{$product->price}},{{$product->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            <div class="product-overlay"><a href="products/details/{{ $product->slug }}">
                                                <div class="overlay-content">
                                                    <h2>${{ $product->price }}</h2>
                                                    <p>{{ $product->name }}</p>
                                                    <a id="btnAdd" class="btn btn-default add-to-cart" onclick="addToCart({{$product->id}},{{$product->sku}},'{{$product->name}}','{{$product->description}}','{{$product->image}}',{{$product->quantity}},{{$product->price}},{{$product->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div></a>
                                            </div>

                                    </div>

                                    <input id="product_quantity_add_to_cart" type="hidden" value="1" />
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            @endforeach









<div style="clear:both">
    						<center><ul class="pagination">
    							{!! $products->links(); !!}
    						</ul></center>
                @elseif(isset($message))
			<p>{{ $message }}</p>
                @endif
    					</div><!--features_items-->
    				</div>
    			</div>
    		</div>
    	</section>


                            <h2>Cart<span id="cart_update"><span></h2>
        Select Product :
        <select id="products">
            <option value="50000">iPhone6</option>
            <option value="60000">iPhone6 Plus</option>
            <option value="45000">iPad Air 2 with Cellular</option>
        </select>

        Quantity
        <input type="text" id="qty" size="3" />
        <p/>
        <button id="btnAdd" onclick="addToCart()" >Add To Cart</button>

        <p></p>
        <table id="cart" border="1" style="visibility:hidden; width:100%">
             <thead>
                  <tr>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th></th>
                 </tr>
             </thead>
             <tbody id="cartBody">

             </tbody>
        </table>





@endsection
