<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Product;
use App\Model\OrderDetails;


class Order extends Model
{
    protected $fillable = ['user_id','status','total'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
