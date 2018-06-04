<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Address;
use App\Model\Product;

class Supplier extends Model
{
    protected $fillable = ['name','email','phone','street',
                           'number','city','state','zip_code'];


    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
