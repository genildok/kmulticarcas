<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Order;
use App\Model\Cost;
use App\Model\Payment;

class PainelController extends Controller
{
    private $product;
    private $order;
    private $cost;
    private $payment;
    
    public function __construct(Product $product,Order $order,Cost $cost,Payment $payment)
    {

        $this->middleware('auth:admin')->except('logout');

        $this->product = $product;
        $this->order = $order;
        $this->cost = $cost;
        $this->payment = $payment;
    }

    public function index()
    {
        $products = $this->product->join('features','features.product_id','=','products.id')
                                  ->join('suppliers','suppliers.id','=','products.supplier_id')
                                  ->select('products.*','features.*','suppliers.name as sup_name')
                                  ->orderBy('features.quantity_item','ASC')->paginate(15);

        $total_order = $this->order->count();
        $waiting_order = $this->order->where('status','Aguardando')->count();
                           
        $total_costs = $this->cost->sum('total');
        $total_payment = $this->getTotalPayment($total_costs);
    //    dd($products);
        return view('painel.dashboard.index',compact('products','total_order','waiting_order','total_costs','total_payment'));
    }

    private function getTotalPayment($total_costs)
    {
       return $this->payment->sum('payment_amount') - $total_costs;
    }
}
