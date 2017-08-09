<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header_slider;

use App\Feature_item;

use App\Tabpane;

use App\Product;

use App\Recommended_item;

use App\Category;

use App\Subcategory;

use App\Brand;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_sliders = Header_slider::all();
        $feature_items = Feature_item::all();
        $recommended_items = DB::table('recommended_items')
            ->join('products', 'recommended_items.product_id', '=', 'products.id')
            ->select('products.*', 'recommended_items.*')
            ->get();
        $feature_items = DB::table('feature_items')
            ->join('products', 'feature_items.product_id', '=', 'products.id')
            ->select('products.*', 'feature_items.*')
            ->get();
        $tabpane_categories = Tabpane::select('category_name')->distinct()->orderBy('id', 'asc')->get();
        $tabpane_products = Tabpane::all();
        $i = 0;
        $j = 0;
        $tp = array();
        foreach ($tabpane_categories as $tabpane_category) {
            ++$i;
                $jahid = array();
                $j = 0;
                foreach ($tabpane_products as $tabpane_product) {
                    if($i==1){
                    $tp[$tabpane_product->category_name]=array();
                }
                    if($tabpane_product->category_name==$tabpane_category->category_name){

                        array_push($jahid,serialize(Product::find($tabpane_product->product_id)));
                     
                        $j++;
                       
                        if($j==4){
                        array_push($tp[$tabpane_product->category_name],$jahid);

                    }

                    }
                }

        }

        $tabpane_products = $tp;

        return view('welcome')->withHeader_sliders($header_sliders)->withFeature_items($feature_items)->withTabpane_categories($tabpane_categories)->withRecommended_items($recommended_items)->withTabpane_products($tabpane_products);
    }
}
