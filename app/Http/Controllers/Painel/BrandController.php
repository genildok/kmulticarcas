<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Brand;

class BrandController extends Controller
{
    
    private $brand;

    public function __construct(Brand $brand) {
        $this->middleware('auth:admin')->except('logout');
        $this->brand = $brand;
    }

    public function index()
    {
        // Retorna todas as marcas com limite de 15.
        $brands = $this->brand->limit(15)->get();
        return view('painel.brand.list',compact('brands'));
    }

    public function create()
    {
        // Retorna o form brand
        $title = "Gerenciamento de Marca";
        $subTitle = "Cadastrar nova marca";

        return view('painel.brand.create',compact('title','subTitle'));


    }

    public function store(Request $request)
    {
        // Cadastra uma nova marca.

        
        $request->validate([
            'brandName' => 'required|string|min:3',
        ]);
        
        $inputBrand = $request->brandName;
        
        //Verifica se a marca já existe.
        $brand = $this->brand->where('brand',$inputBrand)->get();
       
        if (sizeof($brand) == 1) {
            return redirect()->back()
                             ->with(['error' => 'Já existe uma marca com o mesmo nome.'])
                             ->withInput(['brandName' => $inputBrand ]);
        }
        
        //Sava a nova brand.
        $this->brand->brand = $inputBrand;
        $this->brand->save();

        return redirect()->back()->with(['success' => 'Nova marca cadastrada com sucesso.']);
    }

    public function destroy(Request $request)
    {
        //Remove a brend selecionada
        $brand = $this->brand->find($request->id);

        if ($brand) {
            $brand->delete();
            return redirect()->back()->with(['success' => 'A marca selecionada foi removida com sucesso.']);
        }
    }
}
