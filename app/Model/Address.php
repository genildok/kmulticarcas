<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Supplier;

class Address extends Model
{
    protected $table = 'address';
    
    protected $fillable = ['supplier_id','street', 'number','city',
                           'district','state','zip_code'];

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }                           
}
