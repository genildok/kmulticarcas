@extends('layouts.master')

@section('content')
 
      <div class="box-body no-padding">
        <table class="table table-striped">
          <tr>
            <th style="width: 10px">#</th>
            <th>Marcas dos Produtos</th>
            <th>Data de Cadastro</th>
            <th style="width: 40px">Ação</th>
          </tr>
            @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->id }}.</td>
                    <td>{{ $brand->brand }}</td>
                    <td>{{ $brand->created_at }}</td>

                        @if (Request::is('painel/fornecedor/editar'))
                        <td>
                            <a href="{{ route('painel.supplier.edit',['id' => $brand->id ]) }}">
                                 <i class="fa fa-pencil-square-o fa-2x text-blue"></i>
                            </a>
                        </td>    
                    @else
                        <td>
                            {!! Form::open(['route'=>['painel.brand.delete','id' => $brand->id ],'method'=>'post']) !!}
                                {!! Form::deleteSupplier() !!}           
                            {!! Form::close() !!}
                        </td>    
                    @endif   
                </tr>
            @endforeach
        </table>
    </div>
@endsection