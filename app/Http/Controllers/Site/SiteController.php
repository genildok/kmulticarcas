<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function index()
    {   
        $page = 'index';
        return view('site.home.index', compact('page',$page));
    }


    public function contact()
    {
        /** return form contact */

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

}
