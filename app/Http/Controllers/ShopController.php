<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use DB;

class ShopController extends Controller
{

	public function index()
    {
        
        $products = Product::orderBy('id', 'desc')->paginate(12);
        return view('shop')->withProducts($products);
    }

}
