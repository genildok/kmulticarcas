<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Brand;


class SiteController extends Controller
{

    private $product;
    private $brands;


    public function __construct(Product $product,Brand $brand) {
        $this->product = $product;
        $this->brands = $brand;
    }


    public function index()
    {   
        $page       = 'index';
        $products   = $this->product
                           ->where('sales','=',1)
                           ->inRandomOrder()->limit(4)->get();

        return view('site.home.index', compact('page','products'));
    }

    public function contact()
    {
        /** Retorna o form contact */

        $title      = "Contato";
        $page       = "Site";
        $category   = "Contato";

        return view('site.contact.index',compact(
                    'title',$title,
                    'page',$page,
                    'category',$category ));
    }

    public function send_contact(Request $request)
    {
        /* Send message */
        
        $user       = $request->user;
        $email      = $request->email;
        $message    = $request->message;

        
        echo $user , $email  , $message;

    }
 
    public function cart_add()
    {
        $message = "Está página está em construção";
        return view('site.cart.cart_add',compact('message',$message));
    }

    public function error404()
    {
        return view('site.errors.404');
    }

    public function getModel()
    {
        // return $this->brands->get();

        $brands = $this->brands->get();
        return $brands;
    }

}
