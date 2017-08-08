<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReviews extends Model
{
    protected $fillable = ['product_id', 'name', 'email', 'review' , 'product_rating'];
}
