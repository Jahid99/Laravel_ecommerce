<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

use App\Product;

class BrandController extends Controller
{
    public function index($brand_name)
    {
      $brand= Brand::where('name' , '=', $brand_name)->get();
      $brand = product::where('brand_id' , '=', $brand[0]->id)->paginate (6)->setPath ( '' );
      $pagination = $brand->appends ( array (
            'brand_name' => $brand_name
        ) );
      return view('brand')->withBrands($brand);
    }
}
