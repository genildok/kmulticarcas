<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Supplier;
use App\Model\Feature;
use App\Model\Brand;


class ProductController extends Controller
{
    private $product;
    private $destination;

    public function __construct(Product $product) {

        $this->middleware('auth:admin');

        $this->product = $product;
        $this->destination = public_path('assets/painel/img/');
    }

    public function index()
    {   
        $title = 'Gerenciamento de Produto';
        $subTitle = 'Listagem de Produtos';

        $products = $this->product->join('features','products.id','=','features.product_id')
                                  ->select('features.id as id_feature','features.*','products.*')->paginate(10);


        return view('painel.product.list', compact('products','title','subTitle'));
    }

    public function create()
    {
        $title = 'Gerenciamento de Produto';
        $subTitle = 'Cadastrar Produto';
        
        $color = $this->product->colors();
        $size = $this->product->sizes();
        
        $suppliers = Supplier::pluck('name','id');
        $brands    = Brand::pluck('brand','id');
       
        return view('painel.product.create',compact('suppliers','brands','title','subTitle','color','size'));
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $product =  $this->product->where('name',$request->name)->first();
        
        if(is_null($product))
        {
            $request->validate([
                'name'          => 'required|max:100',
                'supplier'      => 'required|numeric',
                'quantity'      => 'required|numeric',
                'color'         => 'required',
                'size'          => 'required|min:1',
                'price'         => 'required',
                'description'   => 'required|max:100',
                'brand'         => 'required|numeric',
                'image'         => 'required|image|mimes:jpeg,png|max:2048',
            ]);
        

            $product = $this->product;
            $product->name = $request->name;
            $product->supplier_id = $request->supplier;
            $product->brand_id = $request->brand;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->sales = $request->sales;
            $product->image = time().'.'.$request->image->getClientOriginalExtension();
            $product->save();

            $request->image->move($this->destination,$product->image);
        }else
        {
            $product->quantity += $request->quantity;
            $product->save();
        }

    
        foreach ($request->size as $sizes) {
            
            $feature = new Feature();
            $feature->product_id = $product->id;
            $feature->quantity_item = $request->quantity;
            $feature->color = $request->color;
            $feature->size = $sizes;
            $product->features()->save($feature);  
        }  
    

        return redirect()->back()->with('success','Porduto cadastrado com sucesso.')
                                 ->withInput([
                                     'name' => $request->name,'description' => $request->description,
                                     'price' => $request->price,'brand' => $request->brand,'quantity' => $request->quantity,
                                     'supplier' => $request->supplier,'price' => $request->price]);

    }

    public function edit($id,$id_feature)
    {
        
        
        $product    = $this->product->find($id);
        $feature    = $product->features->find($id_feature);
        $suppliers  =  Supplier::pluck('name','id');
        $brands      =  Brand::pluck('brand','id');
        
        $color =  $product->colors();
        $sizes =  $product->sizes();

        $title = 'Gerenciamento de Produto';
        $subTitle = 'Editar Produto ' .' - '. $feature->brand .' / '.$product->name;

        // dd($product->brand_id);

        return view('painel.product.edit',compact('product','brands','feature','suppliers','color','sizes','title','subTitle'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'supplier' => 'required|numeric',
            'brand' => 'required|numeric',
            'quantity' => 'required|numeric',
            'color' => 'required',
            'size' => 'required|min:1',
            'price' => 'required',
            'description' => 'required|max:100',
        ]);

        
        $product                = $this->product->find($request->id);
        $product->name          = $request->name;
        $product->supplier_id   = $request->supplier;
        $product->brand_id      = $request->brand;
        $product->price         = $request->price;
        $product->description   = $request->description;
        $product->quantity      = $request->quantity;
        $product->sales         = $request->sales;
        
        // dd($product->brand_id);
        if ($request->image) {

            if (file_exists($this->destination . $product->image)) {
                unlink($destination . $product->image);
            }
            
            $product->image = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destination,$product->image);

        }

        if ($product->save()) {
            $feature                = $product->features()->find($request->id_feature);
            $feature->product_id    = $request->id;
            $feature->quantity_item = $request->quantity;            
            $feature->color         = $request->color;
            $feature->size          = $request->size;
            $product->features()->save($feature);
        }    

        return redirect()->back()->with('success','Produto foi atualizado com sucesso.');
    }

    public function remove($id)
    {   
       
        $product = $this->product->find($id);

        $title = "Confirmação de Exclusão";
        $subTitle = $product->name;

        return view('painel.pages.confirm',compact('product','title','subTitle'));
    }

    public function delete(Request $request)
    {
        $product = $this->product->find($request->id);
            
        if (file_exists($this->destination . $product->image)) {
            unlink($this->destination . $product->image);
        }

        if($product->delete($request->id)){
            return redirect()->route('painel.product.delete')->with('success','Produto foi removido com sucesso.');
        }
        else{
            return redirect()->route('painel.product.delete')->with('errors','Ocorreu um erro ao remover o produto.');
            
        }
    }
}
