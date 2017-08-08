<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Product_period;

use App\Brand;

use App\Subcategory;

use App\UserReviews;

use Session;

use App\Recommended_item;

use DB;

class ProductController extends Controller
{
    public function product_details($product_slug)
    {
        $subcategory = new Subcategory();
    	$product = Product::where('slug', '=', $product_slug)->first();
        if($product->subcategory_id!=NULL){
        	$subcategory = Product::where('slug', '=', $product_slug)->first()->subcategory;
            $similar_products =  $subcategory->products->shuffle()->take(7);
            // removing the index for the product containing the value of $product_slug variable
            $flag = 0;
            foreach ($similar_products as $similar_product) {
            if($similar_product->slug == $product_slug){
                unset($similar_products[$flag]);
                break;
            }
            ++$flag;
        }
        }else{
            $category = Product::where('slug', '=', $product_slug)->first()->category;
             $similar_products =  $category->products->shuffle()->take(7);
             // removing the index for the product containing the value of $product_slug variable
            $flag = 0;
            foreach ($similar_products as $similar_product) {
            if($similar_product->slug == $product_slug){
                unset($similar_products[$flag]);
                break;
            }
            ++$flag;
         }
        }
        //we have to remove one product from the array.
        if(count($similar_products)==7){
            unset($similar_products[0]);
        }
    	$product_period = Product_period::find($product->period_id);
    	$product_brand = Brand::find($product->brand_id);
        $userreviews = UserReviews::where('product_id', '=', $product->id)->orderBy('id', 'DSC')->get();

        $average_rating = DB::table('user_reviews')
                ->where('product_id', $product->id)
                ->avg('product_rating');

        $recommended_items = DB::table('recommended_items')
            ->join('products', 'recommended_items.product_id', '=', 'products.id')
            ->select('products.*', 'recommended_items.*')
            ->get();


    	return view('product_details')->withProduct ($product)->withProduct_period($product_period)->withProduct_brand($product_brand)->withSimilar_products($similar_products)->withUserreviews($userreviews)->withAverage_rating($average_rating)->withRecommended_items($recommended_items);
   
    }

    public function post_review(Request $request){
        UserReviews::create($request->all());
        $userreviews = new UserReviews();
        $userreviews = UserReviews::where('product_id', '=', $request['product_id'])->get();
        Session::flash('success', 'Review successfully added');
        return redirect()->back();
    }
}
