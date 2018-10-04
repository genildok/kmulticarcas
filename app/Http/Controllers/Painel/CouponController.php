<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Coupon;
use DateTime;

class CouponController extends Controller
{
    private $coupon;

    public function __construct(Coupon $coupon) {

        $this->middleware('auth:admin')->except('logout');
        $this->coupon = $coupon;
    }

    public function index()
    {
        $title      = 'Gerenciamento de Cupons';
        $subTitle   = 'Lista de Cupons';

        $coupons = $this->coupon->get();
        return view('painel.coupon.index',compact('coupons','title','subTitle'));
    }
    public function show($id)
    {
        $title      = 'Gerenciamento de Cupons';
        $subTitle   = 'Editar Cupom';
        $coupon = $this->coupon->find($id);

        return view('painel.coupon.edit',compact('coupon','title','subTitle'));

    }
    public function create($product_id)
    {   
        $title      = 'Gerenciamento de Cupons';
        $subTitle   = 'Novo Cupom';

        $id         = $product_id;
        $coupon     =  $this->coupon->getCoupon(); 

        return view('painel.coupon.create',compact('coupon','title','subTitle','id'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_id'        => 'required|unique:coupons',
            'coupon'            => 'required|unique:coupons',
            'description'       => 'required',
            'expiration_date'   => 'required|date',
            'limit'             => 'required|numeric',
            'discount'          => 'required|numeric',
            ]);

            $coupon = $this->coupon;
            $coupon->coupon             = $request->coupon;
            $coupon->product_id         = $request->product_id;
            $coupon->description        = $request->description;
            $coupon->limit              = $request->limit;
            $coupon->expiration_date    = $request->expiration_date;
            $coupon->discount    = $request->discount;
            $coupon->status             = 0;
            $coupon->save();    
            return redirect()->back()->with('success','Cupom criado com sucesso.');

    }
    public function update(Request $request)
    {
        $coupon = $this->coupon->find($request['id']);
        $coupon->description = $request->description;
        $coupon->expiration_date = $request->expiration_date;
        $coupon->limit = $request->limit;
        $coupon->discount = $request->discount;
        $coupon->save();
        return redirect()->back()->with('success','Cupom atualizado com sucesso.');
    
    }
    public function active($id)
    {
        $coupon = $this->coupon->find($id);
        $coupon->status = 1;
        $coupon->save();
        return redirect()->back();
    }
   
}
