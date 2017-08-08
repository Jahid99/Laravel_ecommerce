<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     public function products()
    {
        return $this->hasMany('App\Product','category_id','id'); // category_id from product table
    }
    public function subcategories()
   {
       return $this->hasMany('App\Subcategory','category_id','id'); // category_id from product table
   }
}
