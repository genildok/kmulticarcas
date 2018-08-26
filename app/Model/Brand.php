<?php

namespace App\Model;

use App\Model\Brand;
use App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $fillable = ['brand'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected $hidden = [
       'remember_token',
    ];
}
