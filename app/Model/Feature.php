<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Feature extends Model
{
    protected $fillable = ['product_id','color','size','brand','quantity_item'];


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
