<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

use App\Subcategory;

use App\Brand;

use App\Product_period;

use Storage;

use Session;

use Image;

use Auth;

class AdminController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$products = Product::all();
      $active = 'home';
      if(Auth::user()->email=='jahidulpathan@gmail.com'){
      return view('admin.home')->withProducts($products)->withActive($active);
      }else{
        return redirect()->route('app.home');
      }
    }

     public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $product_periods = Product_period::all();
        $active = 'add_pro';
        return view('admin.add_products')->withCategories($categories)->withSubcategories($subcategories)->withBrands($brands)->withProduct_periods($product_periods)->withActive($active);
    }

     public function edit($id)
    {
         
        $product = Product::find($id);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $product_periods = Product_period::all();

        return view('admin.edit')->withProduct($product)->withCategories($categories)->withSubcategories($subcategories)->withBrands($brands)->withProduct_periods($product_periods);
    }

    public function update(Request $request, $id)
    {
      // validate the data
        $this->validate($request, array(
                'sku'         => 'required|max:20',
                'category_id'         => 'required',
                'subcategory_id'         => 'required',
                'brand_id'         => 'required',
                'period_id'         => 'required',
                'description'         => 'required',
                'quantity'         => 'required',
                'slug'         => 'required',
                'price'         => 'required|integer',
                'barcode'         => 'required|integer',
            ));
        $product = Product::find($id);

        $product->sku = $request->input('sku');
        $product->category_id = $request->input('category_id');
        $product->subcategory_id = $request->input('subcategory_id');
        $product->brand_id = $request->input('brand_id');
        $product->period_id = $request->input('period_id');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->quantity = $request->input('quantity');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->barcode = $request->input('barcode');
        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/home/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);
         $oldFilename = $product->image;

          $product->image = $filename;

          Storage::delete($oldFilename);
        }
        $product->save();
        return redirect()->route('admin.index');
    }

    public function show($id)
    {
    	
    }

     public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'sku'         => 'required|max:20',
                'category_id'         => 'required',
                'subcategory_id'         => 'required',
                'brand_id'         => 'required',
                'period_id'         => 'required',
                'description'         => 'required',
                'quantity'         => 'required',
                'slug'         => 'required',
                'price'         => 'required|integer',
                'barcode'         => 'required|integer',
            ));

      
        $product = new Product();
        $product->sku = $request->input('sku');
        $product->category_id = $request->input('category_id');
        $product->subcategory_id = $request->input('subcategory_id');
        $product->brand_id = $request->input('brand_id');
        $product->period_id = $request->input('period_id');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->quantity = $request->input('quantity');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->barcode = $request->input('barcode');
        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/home/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);
         $oldFilename = $product->image;

          $product->image = $filename;

          Storage::delete($oldFilename);
        }
        $product->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
    	$product = Product::find($id);
        $product->delete();
        Session::flash('success', 'Product Deleted Successfully');
        return redirect()->route('admin.index');
    }
}
