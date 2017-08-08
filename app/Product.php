<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	

     public function subcategory()
    {
        return $this->hasOne('App\Subcategory','id','subcategory_id'); // subcategory_id from product table
    }
     public function category()
    {
        return $this->hasOne('App\Category','id','category_id'); // subcategory_id from product table
    }
}
