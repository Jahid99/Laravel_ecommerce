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
            // echo '<pre>';
            // print_r($recommended_items);
            // exit;
        $tabpane_categories = Tabpane::select('category_name')->distinct()->orderBy('id', 'asc')->get();
        $tabpane_products = Tabpane::all();
        $i = 0;
        $j = 0;
        $tag2 = array();
        foreach ($tabpane_categories as $tabpane_category) {
            ++$i;
                //echo $tabpane_category;
                $jahid = array();
                $j = 0;

                foreach ($tabpane_products as $tabpane_product) {

                        //echo $tabpane_product->category_name;
                        // echo $tabpane_category->category_name;
                    if($i==1){
                    $tags2[$tabpane_product->category_name]=array();
                }
                    if($tabpane_product->category_name==$tabpane_category->category_name){

                        array_push($jahid,serialize(Product::find($tabpane_product->product_id)));
                        //echo $tabpane_product->product_id.'<br>';
                        $j++;
                        //echo $j;
                        if($j==4){
                        array_push($tags2[$tabpane_product->category_name],$jahid);

                    }

                    }



                    //array_push($tags2[$tabpane_product->category_name],$jahid);
                }

                // echo '<pre>';
                //     print_r($tags2);
                //     exit;

        }
        // echo '<pre>';
        //         print_r($tags2);
        // exit;
        //exit;


        // $tags2 = array();
        // foreach ($tabpane_products as $tabpane_product) {
        //     $jahid = array();
        //     //$pros = Product::find($tabpane_product->product_id);
        //     $pros = Tabpane::where('category_name', '=', $tabpane_product->product_id)->get();



        //        echo '<pre>';
        // print_r($pros);


        //     foreach ($pros as $pro) {
        //          echo '<pre>';
        // print_r($pro->id);
        //     }
        //    echo '<pre>';
        // print_r($pros);

        //     $tags2[$tabpane_product->category_name]=array();
        //     foreach ($pros as $pro) {

        //         array_push($jahid,$pro);
        //     }
        //       echo '<pre>';
        // print_r($pros);

        // exit;
        //     array_push($tags2[$tabpane_product->category_name],$jahid);
        // }


        // $all_cat_with_subcat = DB::table('subcategories')
        //     ->join('categories', 'subcategories.category_id', '=', 'categories.id')
        //     ->select('categories.*', 'subcategories.*')
        //     ->get();

       

  //       echo '<pre>';
  // print_r($arr);
  //
  // exit;




        $tabpane_products = $tags2;

        //  echo '<pre>';
        // print_r($tabpane_products);

        // exit;
       

        //  echo '<pre>';
        // print_r($new_arr);
        //
        // exit;

        return view('welcome')->withHeader_sliders($header_sliders)->withFeature_items($feature_items)->withTabpane_categories($tabpane_categories)->withRecommended_items($recommended_items)->withTabpane_products($tabpane_products);
    }
}
