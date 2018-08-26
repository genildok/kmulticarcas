<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;

class OrderController extends Controller
{
    
    private $order;

    public function __construct(Order $order) {
        
        $this->middleware('auth:admin');
        $this->order = $order;
    }


    public function index()
    {

        $title = 'Gerenciamento de Pedidos';
        $subTitle = 'Listagem de pedidos';

        $orders = $this->order->join('users','users.id','orders.user_id')
                              ->select('users.*','users.id as user_id','orders.*')
                              ->orderBy('orders.id','desc')
                              ->paginate(10);
   
        return view('painel.order.list',compact('orders','title','subTitle'));
        // dd($orders);
    }

    public function show($id)
    {
        $title = 'Gerenciamento de Pedidos';
        $subTitle = 'Comfimação de Pedido';
        $order = $this->order->find($id);

        return view('painel.pages.confirm',compact('order','title','subTitle'));

    }

    public function orderConfirm(Request $request)
    {
        $order = $this->order->find($request->id);
        $order->status = 'Pendente';
        $order->save();

        return redirect()->route('painel.order.list');
    }

    public function orderCancel(Request $request)
    {
        $order = $this->order->find($request->id);
        $order->status = 'Cancelado';
        $order->save();
        // dd($request->id);
        return redirect()->back()->with('success','Pedido cancelado com sucesso.');
    }
}
