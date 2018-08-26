<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Feature;
use App\Model\Brand;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product) {
        $this->product = $product;
    }
   
    public function show($id)
    {

        $product = $this->product->join('features','features.product_id','=','products.id')
                                 ->select('products.*','features.*')
                                 ->where('products.id',$id)->get();
      
        $brands = Brand::find($product[0]->brand_id)->products;

       
            // dd($product);
        

        return view('site.details.index',compact('product','brands','features'));
    }

    public function search(Request $request)
    {   
        //retorna produtos pelo filtro form search
        
        $search = ($request->search) ? $request->search : null ;

        $products = $this->product->where('name','LIKE','%' . $search . '%')
                                  ->orWhere('description','LIKE','%' . $search .'%')
                                  ->get();


        if ( is_null($search) or sizeof($products) == 0) {
            $search = ($search) ? $search : 'Nenhum produto buscado';
            $products = $this->product->inRandomOrder()->limit(15)->get();
        }


        return view('site.product.index',compact('products','search'));
    }

    public function sale()
    {

        /** return sales db **/
        $title = "Produtos em Oferta";
        $page = "Produtos";
        $category = "Ofertas";

        $products = $this->product->where('sales',1)->get();

        return view('site.product.index',compact(
            'title','page','category','products'));
    }

    public function brand(Request $request)
    {
        $brand_id = $request->q;

        $products   = $this->product->where('brand_id',$brand_id)->get();

        // $brand      =  (sizeof($products) == 0) ? null : $products[0]->brand->brand;
        $brand      = (sizeof($products) == 0) ? null : $products[0]->brand->brand;
        $page       = "Produtos";
        $title      = "Produtos da " . ucfirst($brand);
        $category   = "Marca"; 
        
        return view('site.product.index', compact(
            'title',
            'page',
            'category','brand','products'));
    }

    public function new()
    {
        /** return new item db **/
        $title      = "Novidades";
        $page       = "Produtos";
        $category   = "Novidades";

        $products = $this->product->orderBy('created_at','desc')->limit(10)->get();
       return view('site.product.index', compact('title','page','category','products'));
        
    }
}
