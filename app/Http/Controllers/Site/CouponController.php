<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Site\CartController;
use App\Model\Coupon;
use App\Model\Cart;
use DateTime;

class CouponController extends Controller
{
    protected $cartController;
    private $couponStatus = false;

    public function __construct(CartController $cartController) {
        $this->cartController = $cartController;
    }

    public function couponValidation(Request $request)
    {

        $coupon = Coupon::where('coupon',$request->coupon)->first();
        //dd($coupon->count());
        if (!is_null($coupon) && $coupon->count() > 0) {
           
            $date       = new DateTime(date('Y-m-d'));
            $expiration = new DateTime($coupon->expiration_date);

            // Faz o calculo da diferença entre a data atual e a data de validade
            $interval   = $date->diff($expiration)->format('%R%d');

            if ($coupon->status > 0) {
                if($interval < 0){
                    $this->couponStatus = true;
                }
            }
        }

        if($this->couponStatus){
            if($this->cartController->cartDiscount($request,$coupon)){
                return redirect()->back();
            }
        }

        return redirect()->back()->with('error','Cupom inválido');
    }
}
