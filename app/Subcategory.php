<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
      public function products()
    {
        return $this->hasMany('App\Product','subcategory_id','id'); // category_id from product table
    }
}
