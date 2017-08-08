@extends('layouts.master')

    @section('content')


    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">

                            @foreach($header_sliders as $header_slider)

                            <div class="item @if($loop->iteration==1)active @else @endif ">
                                <div class="col-sm-6">
                                    <h1>{!! $header_slider->title_1 !!}</h1>
                                    <h2>{{ $header_slider->title_2 }}</h2>
                                    <p>{{ $header_slider->description }}</p>
                                    <button type="button" class="btn btn-default get">{{ $header_slider->button_text }}</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ $header_slider->image_1 }}" class="girl img-responsive" alt="{{ $header_slider->image_1_alt }}" />
                                    <img src="{{ $header_slider->image_2 }}"  class="pricing" alt="{{ $header_slider->image_2_alt }}" />
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->

    <section>
        <div class="container">
            <div class="row">
              @include('partials._sidebar')
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>

                        @foreach($feature_items as $feature_item)

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/{{ $feature_item->image }}" alt="" />
                                            <h2>${{ $feature_item->price }}</h2>
                                            <p>{{ $feature_item->name }}</p>
                                            <a id="btnAdd" class="btn btn-default add-to-cart" onclick="addToCart({{$feature_item->id}},{{$feature_item->sku}},'{{$feature_item->name}}','{{$feature_item->description}}','{{$feature_item->image}}',{{$feature_item->quantity}},{{$feature_item->price}},{{$feature_item->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay"><a href="products/details/{{ $feature_item->slug }}">
                                            <div class="overlay-content">
                                                <h2>${{ $feature_item->price }}</h2>
                                                <p>{{ $feature_item->name }}</p>
                                                <a id="btnAdd" class="btn btn-default add-to-cart" onclick="addToCart({{$feature_item->id}},{{$feature_item->sku}},'{{$feature_item->name}}','{{$feature_item->description}}','{{$feature_item->image}}',{{$feature_item->quantity}},{{$feature_item->price}},{{$feature_item->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
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


                    </div><!--features_items-->



                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                @foreach($tabpane_categories as $tabpane_category)
                                    <li @if($loop->iteration==1)class="active" @else @endif ><a href="#{{ str_replace(' ', '', strtolower($tabpane_category->category_name)) }}" data-toggle="tab">{{ $tabpane_category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>






                        <div class="tab-content">

                            @foreach($tabpane_products as $key => $tabpane_product)

                            <div class="tab-pane fade

                            @if($loop->iteration==1) active in @else @endif





                            " id="{{ str_replace(' ', '', strtolower($key)) }}" >


                                @foreach($tabpane_products[$key] as $tabpane_product)
                                     @for ($s = 0; $s < 4 ; $s++)
                                @php

                                    $tabpane_item = unserialize($tabpane_product[$s]);

                                @endphp

                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center"><a href="products/details/{{ $tabpane_item->slug }}">
                                                <img src="images/home/{{ $tabpane_item->image }}" alt="" />
                                                <h2>${{ $tabpane_item->price }}</h2>
                                                <p>{{ $tabpane_item->name }}</p>
                                                <a id="btnAdd" class="btn btn-default add-to-cart" onclick="addToCart({{$tabpane_item->id}},{{$tabpane_item->sku}},'{{$tabpane_item->name}}','{{$tabpane_item->description}}','{{$tabpane_item->image}}',{{$tabpane_item->quantity}},{{$tabpane_item->price}},{{$tabpane_item->barcode}})" ><i class="fa fa-shopping-cart"></i>Add to cart</a></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endfor
                                @endforeach


                        </div>
                        @endforeach
                    </div>
                    </div>
                    <!--/category-tab-->

                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>

              
    
   

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">

                                @foreach($recommended_items as $recommended_item)


                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center"><a href="products/details/{{ $recommended_item->slug }}">
                                                <img src="images/home/{{ $recommended_item->image }}" alt="" />
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
