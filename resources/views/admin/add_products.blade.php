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
                            Add Products
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-9">

                        <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Sku Input:</label>
                                <input type="number" value="{{ old('sku') }}" name="sku" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Category ID Input:</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>SubCategory ID Input:</label>
                                <select class="form-control" name="subcategory_id">
                                    @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Brand ID Input:</label>
                                <select class="form-control" name="brand_id">
                                     @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                              <div class="form-group">
                                <label>Period ID Input:</label>
                                <select class="form-control" name="period_id">
                                     @foreach($product_periods as $product_period)
                                    <option value="{{$product_period->id}}">{{$product_period->period}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Name Input:</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Description Input:</label>
                                <textarea name="description" value="{{ old('description') }}" class="form-control" rows="3">
                                    
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label>File Upload</label>
                                <input name="image" value="{{ old('image') }}" type="file">
                            </div>

                            

                            <div class="form-group">
                                <label>Quntity Input:</label>
                                <input type="number" value="{{ old('number') }}" name="quantity" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Slug Input:</label>
                                <input type="text" name="slug" value="{{ old('slug') }}"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Price Input:</label>
                                <input type="number" name="price" value="{{ old('price') }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Barcode Input:</label>
                                <input type="number" name="barcode" value="{{ old('barcode') }}" class="form-control">
                            </div>
                         
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <input type="submit" class="btn btn-default">
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                    
                </div>
                <!-- /.row -->

@endsection