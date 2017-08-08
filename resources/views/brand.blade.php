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
    				<div class="col-sm-3">
    					<div class="left-sidebar">
    						<h2>Category</h2>
    						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title">
    										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
    											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
    											Sportswear
    										</a>
    									</h4>
    								</div>
    								<div id="sportswear" class="panel-collapse collapse">
    									<div class="panel-body">
    										<ul>
    											<li><a href="">Nike </a></li>
    											<li><a href="">Under Armour </a></li>
    											<li><a href="">Adidas </a></li>
    											<li><a href="">Puma</a></li>
    											<li><a href="">ASICS </a></li>
    										</ul>
    									</div>
    								</div>
    							</div>
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title">
    										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
    											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
    											Mens
    										</a>
    									</h4>
    								</div>
    								<div id="mens" class="panel-collapse collapse">
    									<div class="panel-body">
    										<ul>
    											<li><a href="">Fendi</a></li>
    											<li><a href="">Guess</a></li>
    											<li><a href="">Valentino</a></li>
    											<li><a href="">Dior</a></li>
    											<li><a href="">Versace</a></li>
    											<li><a href="">Armani</a></li>
    											<li><a href="">Prada</a></li>
    											<li><a href="">Dolce and Gabbana</a></li>
    											<li><a href="">Chanel</a></li>
    											<li><a href="">Gucci</a></li>
    										</ul>
    									</div>
    								</div>
    							</div>

    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title">
    										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
    											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
    											Womens
    										</a>
    									</h4>
    								</div>
    								<div id="womens" class="panel-collapse collapse">
    									<div class="panel-body">
    										<ul>
    											<li><a href="">Fendi</a></li>
    											<li><a href="">Guess</a></li>
    											<li><a href="">Valentino</a></li>
    											<li><a href="">Dior</a></li>
    											<li><a href="">Versace</a></li>
    										</ul>
    									</div>
    								</div>
    							</div>
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title"><a href="#">Kids</a></h4>
    								</div>
    							</div>
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title"><a href="#">Fashion</a></h4>
    								</div>
    							</div>
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title"><a href="#">Households</a></h4>
    								</div>
    							</div>
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title"><a href="#">Interiors</a></h4>
    								</div>
    							</div>
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title"><a href="#">Clothing</a></h4>
    								</div>
    							</div>
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title"><a href="#">Bags</a></h4>
    								</div>
    							</div>
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h4 class="panel-title"><a href="#">Shoes</a></h4>
    								</div>
    							</div>
    						</div><!--/category-productsr-->

    						<div class="brands_products"><!--brands_products-->
    							<h2>Brands</h2>
    							<div class="brands-name">
    								<ul class="nav nav-pills nav-stacked">
    									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
    									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
    									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
    									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
    									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
    									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
    									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
    								</ul>
    							</div>
    						</div><!--/brands_products-->

    						<div class="price-range"><!--price-range-->
    							<h2>Price Range</h2>
    							<div class="well">
    								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
    								 <b>$ 0</b> <b class="pull-right">$ 600</b>
    							</div>
    						</div><!--/price-range-->

    						<div class="shipping text-center"><!--shipping-->
    							<img src="images/home/shipping.jpg" alt="" />
    						</div><!--/shipping-->

    					</div>
    				</div>

    				<div class="col-sm-9 padding-right">
    					<div class="features_items"><!--features_items-->
    						<h2 class="title text-center">Features Items</h2>

                @if(isset($brands))


    						 @foreach($brands as $item)

                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('/images/home/' . $item->image)}}" alt="" />
                                                <h2>${{ $item->price }}</h2>
                                                <p>{{ $item->name }}</p>
                                                <a id="btnAdd" class="btn btn-default add-to-cart" onclick="addToCart({{$item->id}},{{$item->sku}},'{{$item->name}}','{{$item->description}}','{{$item->image}}',{{$item->quantity}},{{$item->price}},{{$item->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            <div class="product-overlay"><a href="{{asset('products/details/' . $item->slug)}}">
                                                <div class="overlay-content">
                                                    <h2>${{ $item->price }}</h2>
                                                    <p>{{ $item->name }}</p>
                                                    <a id="btnAdd" class="btn btn-default add-to-cart" onclick="addToCart({{$item->id}},{{$item->sku}},'{{$item->name}}','{{$item->description}}','{{$item->image}}',{{$item->quantity}},{{$item->price}},{{$item->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div></a>
                                            </div>

                                    </div>


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
                                							{!! $brands->links(); !!}
                                						</ul></center>

                                            @endif
                                					</div><!--features_items-->
                                				</div>
                                			</div>
                                		</div>
                                	</section>




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
