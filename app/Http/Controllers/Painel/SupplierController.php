<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Supplier;
use App\Model\Address;

class SupplierController extends Controller
{
    private $supplier;

    public function __construct(Supplier $supplier) {

        $this->middleware('auth:admin');

        $this->supplier = $supplier;
    }

    public function index()
    {
        $title = 'Gerenciamento de Fornecedor';
        $subTitle = 'Listagem de Fornecedores';

        $suppliers = $this->supplier->get();

        return view('painel.supplier.list',compact('suppliers','title','subTitle'));
    }


    public function create()
    {
        $title = 'Gerenciamento de Fornecedor';
        $subTitle = 'Cadastro de Fornecedor';

        return view('painel.supplier.create',compact('title','subTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|max:16'
        ]);
        
        $this->supplier->name = $request->name;
        $this->supplier->email = $request->email;
        $this->supplier->phone = $request->phone;

        if($this->supplier->save()){

            $address = new Address([

                'supplier_id' => $this->supplier->id,
                'street' => $request->street,
                'number' => $request->number,
                'district' => $request->district,
                'city' => $request->city,
                'state' => $request->state,
                'zip_code' => $request->zip_code,
            ]);
           

            $this->supplier->address()->save($address);
        }
        return redirect()->back()->with('success','Fornecedor cadastrado com sucesso.');
    }

    public function edit($id)
    {
        $title = 'Gerenciamento de Fornecedor';
        $subTitle = 'Editar Fornecedor';

        $supplier = Supplier::find($id);

        return view('painel.supplier.edit',compact('supplier','title','subTitle'));
    }

    public function update(Request $request)
    {


        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|max:16'
        ]);

        $supplier = $this->supplier->find($request->id);

        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;

        if ($supplier->save()) {
            $supplier->address->supplier_id = $supplier->id;
            $supplier->address->street = $request->street;
            $supplier->address->number = $request->number;
            $supplier->address->district = $request->district;
            $supplier->address->city = $request->city;
            $supplier->address->state = $request->state;
            $supplier->address->zip_code = $request->zip_code;
            $supplier->address->save();
        }

        return redirect()->back()->with('success','As informações do fornecedor foram atuaizada com sucesso.');

    }

    public function delete()
    {
        $title = 'Gerenciamento de Fornecedor';
        $subTitle = 'Remover Fornecedor';

        $suppliers = $this->supplier->get();

        return view('painel.supplier.delete',compact('suppliers','title','subTitle'));
    }

    public function destroy(Request $request)
    {
        $this->supplier->find($request->id)->delete();
        return redirect()->back()->with('success','Fornecedor removido com sucesso.');

    }
}
