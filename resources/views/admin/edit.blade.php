@extends('admin.layouts.master')

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
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Products
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-9">

                        <form action="{{ route('admin.update', $product->id) }}" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Sku Input:</label>
                                <input type="number" name="sku" value="{{$product->sku}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Category ID Input:</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                    <option 

                                    <?php

                                    if($category->id==$product->category_id){
                                    echo 'selected';
                                    }

                                    ?>
                                     value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>SubCategory ID Input:</label>
                                <select class="form-control" name="subcategory_id">
                                    @foreach($subcategories as $subcategory)
                                    <option
                                    <?php

                                    if($subcategory->id==$product->subcategory_id){
                                    echo 'selected';
                                    }

                                    ?>
                                    value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Brand ID Input:</label>
                                <select class="form-control" name="brand_id">
                                     @foreach($brands as $brand)
                                    <option
                                    <?php

                                    if($brand->id==$product->brand_id){
                                    echo 'selected';
                                    }

                                    ?>
                                    value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                              <div class="form-group">
                                <label>Period ID Input:</label>
                                <select class="form-control" name="period_id">
                                     @foreach($product_periods as $product_period)
                                    <option
                                    <?php

                                    if($product_period->id==$product->period_id){
                                    echo 'selected';
                                    }

                                    ?>
                                    value="{{$product_period->id}}">{{$product_period->period}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Name Input:</label>
                                <input type="text" name="name" value="{{$product->name}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Description Input:</label>
                                <textarea name="description" class="form-control" rows="3">
                                    {{$product->description}}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label>File Upload</label>
                                <input name="image" type="file">
                            </div>

                            <img src="../../images/home/{{ $product->image }}" alt="" height="100" width="100"/>

                            <div class="form-group">
                                <label>Quntity Input:</label>
                                <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Slug Input:</label>
                                <input type="text" name="slug" value="{{$product->slug}}"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Price Input:</label>
                                <input type="number" name="price" value="{{$product->price}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Barcode Input:</label>
                                <input type="number" name="barcode" value="{{$product->barcode}}" class="form-control">
                            </div>
                         
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input name="_method" type="hidden" value="PUT">

                            <input type="submit" class="btn btn-default">
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                    
                </div>
                <!-- /.row -->

@endsection