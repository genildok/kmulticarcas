<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Cart;
use DateTime;

class CartController extends Controller
{
    protected $product;
    protected $cart;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function shoppingCart()
    {
        //Lista item do carrinho

        $session_cart = Session()->get('cart');

        if (!is_null($session_cart)) {
            return view('site.shopping.cart',['cart' => $session_cart]);
        }

        return redirect()->route('site.index');
    }

    public function cartAdd(Request $request)
    {
        //Adiciona item ao carrinho

        $_features = $request->all();
        
        $product = $this->product->find($_features['id']);

        $features = $product->features()->where('color',$_features['color'])
                                        ->where('size',$_features['size'])->first();

        $items = [
            'product' => $product,
            'feature' => $features,
            'quantity'=> $_features['quantity'],
        ];
        $session_cart = $request->session()->has('cart') ? $request->session()->get('cart') : null ;

        $cart = new Cart($session_cart);
        $cart->add($items);

        $request->session()->put('cart',$cart);

        return redirect()->back();
    }
    public function cartRemoveItem(Request $request,$id)
    {
        //Recupera a session cart
        $session_cart = $request->session()->get('cart');

        //Cira uma nova instância de cart
        $cart = new Cart($session_cart);
        //Invoca o metodo de remover 1 unidade do produto
        $cart->removeItem($id);

        if (sizeof($cart->getItems()) == 0) {
            $request->session()->forget('cart');
            unset($cart);
            return redirect()->route('site.index');
        }

        //Atualiza a session cart com o novo cart
        $request->session()->put('cart',$cart);

        return redirect()->back();
    }
    public function cartRemove(Request $request,$id)
    {
    
        //Recupera o carrinho
        $session_cart = $request->session()->get('cart');
        //Cria uma instacia de cart para colocar o carrinho existente
        $cart = new Cart($session_cart);
        //Remove 1 produto do carrinho
        $cart->removeProduct($id);

        // Verifica se sobrou algum item no carrinho
        if(sizeof($cart->getItems()) == 0){
            //Caso o carrinho seja 0 destroi a session e a instância de cart
            $request->session()->forget('cart');
            unset($cart);
        }else{
            //Caso exista items adciona o carrinho atualizado.
            $request->session()->put('cart',$cart);
            return redirect()->back();
        }
       
        return redirect()->route('site.index');

    }
    
    public function cartUpdateQty(Request $request)
    {
        // Recupera o carrinho da session
        $session_cart = $request->session()->get('cart');
        
        // Recupera alguns detalhes do produto
        $details = $request->all();

        // Cria uma nova instância de cart
        $cart = new Cart($session_cart);
        // Atualiza o carrinho
        $cart->updateQuantity($details);
        // Checa se o carrinho tem items
        if (sizeof($cart->getItems()) == 0) {
            $request->session()->forget('cart');
            unset($cart);
            return redirect()->route('site.index');
        }

        //Atualiza a session cart com o novo cart
        $request->session()->put('cart',$cart);
        // Redireciona para o carrinho novamente
        return redirect()->back();

    }
    public function cartRemoveAll(Request $request)
    {
        $request->session()->flush();
       
        return redirect()->route('site.index');   
    }
    public function cartDiscount($request,$coupon)
    {
            $session_cart = $request->session()->get('cart');

            //  Cria uma nova instância de cart
            $cart = new Cart($session_cart);
 
             // Seta o desconto no cart
            $status = $cart->setDiscount($coupon);
            
            // Atualiza o cart
            $request->session()->put('cart',$cart);
        
            return $status;
    }
}
