<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Supplier;
use App\Model\Feature;
use App\Model\Brand;
use App\Model\Coupon;

class Product extends Model
{
    
    protected $fillable = ['supplier_id','name','price','description','quantity','image','sales'];

    public function colors($color = null)
    {
        $color = [
            'Azul'=>'Azul',
            'Amarelo'=>'Amarelo',
            'Branco'=>'Branco',
            'Coral'=>'Coral',
            'Verde'=>'Verde',
            'Preto'=>'Preto',
            'Vermelho'=>'Vermelho',
            'Rosa'=>'Rosa',
            'Lilas'=>'Lilas',
            'Marrom'=>'Marrom',
        ];

        return $color;
    }
    public function sizes()
    {
        $size = [
            '35/36' => '35/36',
            '37/38' => '37/38',
            '39/40' => '39/40',
            'P' => 'P',
            'M' => 'M',
            'G' => 'G',
            'GG' => 'GG',
        ];

        return $size;
    }

    public function features()
    {
        return $this->hasMany(Feature::class,'product_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function coupon()
    {
        return $this->hasOne(Coupon::class);
    }
}
