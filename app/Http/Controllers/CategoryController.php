<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

use App\Subcategory;

class CategoryController extends Controller
{
    public function index($category_name,$subcategory_name='')
    {
        if($subcategory_name==''){
        $category = Category::where('name' , '=', $category_name)->get();
        $category = product::where('category_id' , '=', $category[0]->id)->paginate (6)->setPath ( '' );
        $pagination = $category->appends ( array (
      				'category_name' => $category_name
      		) );
        return view('single-category')->withItems($category);
      }else{
        $subcategory = Subcategory::where('name' , '=', $subcategory_name)->get();
        $subcategory = product::where('subcategory_id' , '=', $subcategory[0]->id)->paginate (6)->setPath ( '' );
        $pagination = $subcategory->appends ( array (
              'subcategory_name' => $subcategory_name
          ) );
        return view('single-category')->withItems($subcategory);
      }
    }
}
