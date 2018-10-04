<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    private $items          = null;
    private $totalCartItems = 0;
    private $totalCart      = 0;
    private $subTotal       = 0;
    private $discount       = 0;

    public function __construct($session_cart)
    {
        
        if ($session_cart) {

            $this->items          = $session_cart->items;
            $this->totalCart      = $session_cart->totalCart;
            $this->totalCartItems = $session_cart->totalCartItems;
            $this->discount       = $session_cart->discount;
            $this->subTotal       = $session_cart->subTotal;
        }
    }

    public function add($items)
    {
        $custom_key = $items['feature']->id . $items['feature']->size . $items['feature']->color;
       
        $storedItem =  
        [ 
            'qty'        => 0,
            'price'      => $items['product']->price,
            'color'      => $items['feature']->color,
            'size'       => $items['feature']->size,
            'coupon'     => null, 
            'item'       => $items['product'], 
        ];
      
        if ($this->items) {
            if (array_key_exists($custom_key,$this->items)) {
                $storedItem = $this->items[$custom_key];
            }
        }

     
        $storedItem['qty']   +=  $items['quantity'];
        $storedItem['price']  = ($items['product']->price * $storedItem['qty']);

        $this->items[$custom_key] = $storedItem;
        $this->totalCartItems     += $storedItem['qty'];
        $this->totalCart += $storedItem['price'];
        $this->subTotal  += $storedItem['price'];
    }

   public function removeProduct($id)
   {
      if (array_key_exists($id,$this->items)) {
          
        $storedItem = $this->items[$id];

          if (!is_null($storedItem['coupon'])) {
                $this->totalCart -= $this->discount;
                $this->discount  = 0;
          }

          $this->totalCart      -= $storedItem['price'];
          $this->totalCartItems -= $storedItem['qty'];
          $this->subTotal       -= $storedItem['price'];

          $this->items[$id] = $storedItem;
          
          unset($this->items[$id]);
      }
   }
   public function updateQuantity($details)
   {
        // Recupera o id do produto na session
        $id = $details['id'];

        if (array_key_exists($id,$this->items)) {
           
            $storedItem = $this->items[$id];

            // Recupera o preço unitário do produto
            $item_price = $storedItem['item']->price;
            // Checa se a quantidade dos detalhes é + 1
            if($details['quantity'] == '+1')
            {
                $storedItem['qty']++;
                $storedItem['price'] += $item_price;

                $this->items[$id] = $storedItem;
                $this->subTotal  += $item_price;
                $this->totalCart += $item_price;

                $this->setTotalCartItems(1);
               
            }
            // dd($this->items);

            // Checa se a quantidade dos detalhes e -1
            if($details['quantity'] == '-1')
            {
              
                $storedItem['qty']--;
                $storedItem['price'] -= $item_price;

                $this->items[$id] = $storedItem;
                $this->totalCart -= $item_price;
                $this->subTotal  -= $item_price;

                $this->setTotalCartItems(-1);
                // Checa se existe items na lista
                $this->checkListItems($id);

                if (!$this->checkCoupon()) {
                    //dd('entrou aqui');
                    $this->discount = 0;
                    $this->subTotal = $this->totalCart;
                }

              
            }
        }
   }
   public function getTotalCart()
   {
       return $this->totalCart;
   }
   public function setSubTotal($total)
   {
        $this->subTotal += $total;
   }
   public function getSubTotal()
   {
      return $this->subTotal;
   }
   public function getItems()
   {
       return $this->items;
   }
   public function setTotalCartItems($quantity)
   {    
        switch ($quantity) {
            case '1':$this->totalCartItems++; break;
            case '-1':$this->totalCartItems--;break;
            default: $this->totalCartItems -= $quantity;break;
        }
   }
   public function getTotalCartItems()
   {
       return $this->totalCartItems;
   }
   public function getDiscount()
   {
       return $this->discount;
   }
   public function setDiscount($coupon)
   {
       $storedItem = $this->items;
       $status = false;

    foreach ($storedItem as $key => $items) {
          
        if ($coupon->product_id == $items['item']->id) {

            if ($items['coupon'] == $coupon->coupon) {
              return redirect()->back()->with('error','Cupom já foi válidado.');
            }
            
            $discount  = $items['item']->price * $coupon->discount;

            $storedItem[$key]['coupon'] = $coupon->coupon;
            $storedItem[$key]['price'] -= $discount;
            
            $this->items      = $storedItem;
            $this->discount   = $discount;
            $this->subTotal  -= $discount;
            
            return true;
        }
    }
    return false;
    

    
    // $storedItem  = $this->items[$key];
        // $discount    = $storedItem['price'] * $coupon->discount;

        // $storedItem['coupon']   = $coupon->coupon;
        // $storedItem['price']   -= $discount;

        // $this->items[$key] = $storedItem;
        // $this->subTotal    = $this->items[$key]['price'];
        // $this->discount    = $discount;
    }
   public function checkListItems($id)
   {
        $storedItem = $this->items;

        if ($storedItem[$id]['qty'] == 0) {
           unset($this->items[$id]);
       }
   }
   public function format($value)
   {
       return number_format($value,2,',','.');
   }
   public function checkCoupon()
   {
       foreach ($this->items as $key => $items) {
           if ($items['coupon']) {
               return true;
           }
       }
   }
}
