<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Coupon extends Model
{
    protected $fillable = ['cupom','product_id','limit','description','expiration_date','discount','status'];
    public $timestamps  = false;
    private $coupon;
    private $character;


    public function __construct() {

        $this->character = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    }
    
    public function product()
    {
        return $this->belongTo();
    }

    public function getCoupon()
    {
        $this->coupon = substr(str_shuffle(str_repeat($this->character,5)),0,8);
        return $this->coupon;
    }

}
