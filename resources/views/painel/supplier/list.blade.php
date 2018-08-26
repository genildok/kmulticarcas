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
                <tr>
                    <td>{{ $supplier->id }}.</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->phone }}</td>

                        @if (Request::is('painel/fornecedor/editar'))
                        <td>
                            <a href="{{ route('painel.supplier.edit',['id' => $supplier->id ]) }}">
                                 <i class="fa fa-pencil-square-o fa-2x text-blue"></i>
                            </a>
                        </td>    
                    @else
                        <td>
                            {!! Form::open(['route'=>['painel.supplier.destroy','id' => $supplier->id ],'method'=>'post']) !!}
                                {!! Form::deleteSupplier() !!}           
                            {!! Form::close() !!}
                        </td>    
                    @endif   
                </tr>
            @endforeach
        </table>
    </div>
@endsection