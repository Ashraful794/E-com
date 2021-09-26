<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public function attributes(){
        return $this->hasMany('App\Models\ProductsAttributes','product_id');
    }
    public function reviews(){
        return $this->hasMany('App\Models\ProductsReviews','product_id');
    }
}
