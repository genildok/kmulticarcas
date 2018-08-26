@extends('layouts.master')

@section('content')
 
      <div class="box-body no-padding">
        <table class="table table-striped">
          <tr>
            <th style="width: 10px">#</th>
            <th>Fornecedor</th>
            <th>Phone</th>
            <th style="width: 40px">Ação</th>
          </tr>
            @foreach ($suppliers as $supplier)
                <tr class="text-bold">
                    <td>{{ $supplier->id }}.</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td><span class="badge bg-red">
                        <a href="{{ route('painel.supplier.destroy',['id' => $supplier->id ]) }}" class="text-gray"><i class="fa fa-trash-o fa-2x" style="color:#fff"></i></a>
                    </td>    
                </tr>
            @endforeach
        </table>
    </div>
@endsection