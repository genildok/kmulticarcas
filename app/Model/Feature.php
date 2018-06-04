<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Feature extends Model
{
    protected $fillable = ['product_id','color','size','brand','quantity'];


    public function products()
    {
        return belongsToMany(Product::class);
    }
}
