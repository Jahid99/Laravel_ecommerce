@extends('admin.layouts.master')

@section('content')
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            All Products
                        </h1>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Sku</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                              <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->sku }}</td>
                                <td><img src="../images/home/{{ $product->image }}" alt="" height="100" width="100"/></td>
                                <td>{{$product->price}}</td>
                                <td><a href="{{ route('admin.edit', $product->id) }}">Edit</a>  | <a href="{{ route('admin.destroy', $product->id) }}">Delete</a></td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-9">

                       

                    </div>
                    
                </div>
                <!-- /.row -->
@endsection