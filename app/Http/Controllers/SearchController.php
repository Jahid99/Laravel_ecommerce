<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index()
    {
      $q = Input::get ( 'q' );
    	if($q != ""){
    	$user = Product::where ( 'name', 'LIKE', '%' . $q . '%' )->paginate (12)->setPath ( '' ); //It works without setPath too
    	$pagination = $user->appends ( array (
    				'q' => Input::get ( 'q' )
    		) );
    	if (count ( $user ) > 0)
    		return view ( 'search' )->withProducts ( $user )->withQuery ( $q );
    	}
    		return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
    }
}
