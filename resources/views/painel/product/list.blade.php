@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="col-md-12">
                {{ $products->links() }}
            </div>
        </div>
      <div class="box-body no-padding">
        <table class="table table-striped text-center">
          <tr>
            <th>Produto</th>
            {{-- <th class="hidden-xs">Descirção</th> --}}
            <th>Cores</th>
            <th><span class="visible-md visible-sm visible-lg">Tamanhos</span><span class="visible-xs">Tam</span></th>
            {{-- <th>Estoque</th> --}}
            <th style="width: 20%" colspan="2">Ação</th>
          </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    {{-- <td class="hidden-xs">{{ $product->description }}</td> --}}
                    <td>{{ $product->color }}</td>
                    <td>{{ $product->size }}</td>
                    {{-- <td><span class="badge  {{ $product->quantity < 4 ? 'bg-red-gradient' : 'bg-green-gradient' }}">{{ $product->quantity }}</span></td> --}}
                    @if (Request::is('painel/produto/editar'))
                        <td>
                            <a href="{{ route('painel.product.edit',['id' => $product->id,'id_feature' => $product->id_feature]) }}">
                                 <i class="fa fa-pencil-square-o fa-2x text-blue"></i>
                            </a>
                        </td>    
                        <td>
                            @if ($product->coupon['coupon'])
                                <i class="fa fa-check fa-2x text-green"></i>
                            @else
                                <a href="{{ route('painel.coupon.create',['id' => $product->id ]) }}">
                                    <i class="fa fa-ticket fa-2x text-muted"></i>
                               </a>
                            @endif
                           
                        </td>    
                    @else
                        <td>
                            <a href="{{ route('painel.product.remove',[ 'id' => $product->id ]) }}">
                                    <i class="fa fa-trash-o fa-2x text-red"></i>
                            </a>
                        </td>    
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
@endsection