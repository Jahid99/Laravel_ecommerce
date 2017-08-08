<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

use App\Category;

use App\product;

use App\Brand;

class SidebarComposer
{
	// public function compose(View $view)
	// {

	// 	$randomize_product_sliders = Randomize_product_slider::all();
 //        $session_id = session()->getId();
 //        $column = 's_id'; // This is the name of the column you wish to search
 //        $cartproducts = Cart::where($column , '=', $session_id)->get();
 //        $total_products_count=0;
 //        foreach($cartproducts as $cartproduct){

            
 //            $total_products_count += $cartproduct->quantity;


 //        }


	// 	$view->with('site_info',site_info::find(1))->withTotal_products_count($total_products_count);
	// }

    public function compose(View $view)
    {

         $all_categories = Category::all();
        $arr = array();
        foreach ($all_categories as $category) {


          $arr[$category->name] = array();

        //  $cat_with_sub = Subcategory::where('category_id', '=', $category->id);
            $cat_with_sub = $category->subcategories;

            array_push($arr[$category->name],serialize($cat_with_sub));


        }

         $new_arr = array();

        $product_brands = Brand::all();

        foreach ($product_brands as $product_brand) {
          $new_arr[$product_brand->name] = array();
          $brand = product::where('brand_id' , '=',$product_brand->id)->get();
          array_push($new_arr[$product_brand->name],count($brand));

        }

        $view->withCatswithsubcats($arr)->withProduct_brands($new_arr);
     
    }

}