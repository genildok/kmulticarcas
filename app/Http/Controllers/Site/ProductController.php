<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('site.details.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sale()
    {
        /** return sales db **/
        $title = "Produtos em Oferta";
        $page = "Produtos";
        $category = "Ofertas";

        return view('site.product.index',compact(
            'title',$title,'page',$page,'category',$category));
    }

    public function brand(Request $request)
    {
        $brand      = $request->q;
        $page       = "Produtos";
        $title      = "Produtos da " . $brand;
        $category   = "Marca";

        return view('site.product.index', compact(
            'title',$title,
            'page',$page,
            'category',$category,'brand',$brand));
    }

    public function new()
    {
        /** return new item db **/
        $title      = "Novidades";
        $page       = "Produtos";
        $category   = "Novidades";

        
       return view('site.product.index', compact(
                    'title',$title,
                    'page',$page,
                    'category',$category));
        
    }
}
