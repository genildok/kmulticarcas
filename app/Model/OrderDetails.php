<?php

namespace App\Model\Painel;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;
use App\Model\Product;

class OrderDetails extends Model
{
    protected $fillable = ['id','order_id','product_id','price','quantity','discount','total','size','color'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
