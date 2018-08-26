@extends('layouts.master')

@section('content')
 
      <div class="box-body no-padding">
        <table class="table table-striped text-center">
          <tr>
            <th class="hidden-xs">Pedido nº</th>
            <th>Cliente</th>
            <th>Status</th>
            <th>Totals</th>
            <th colspan="2" style="width: 20%">Ação</th>
          </tr>
            @foreach ($orders as $order)
                <tr>
                    <td  class="hidden-xs">{{ $order->id }}</td>
                    <td>{{ $order->firstName }}</td>
                    <td>
                        @if ($order->status == 'Aguardando')
                            <span class="badge bg-yellow" style="width: 80px">{{ $order->status }}</span>
                        @elseif($order->status == 'Cancelado')
                            <span class="badge bg-red" style="width: 80px">{{ $order->status }}</span>
                        @else
                            <span class="badge bg-yellow" style="width: 80px">{{ $order->status }}</span>
                        @endif
                    </td>
                    <td>{{ $order->total }}</td>
                    @if (Request::is('painel/pedido/listar'))
                    <td>
                        <a href="{{ route('painel.order.view',['id' => $order->id ]) }}">
                             <i class="fa fa-eye fa-2x text-blue"></i>
                        </a>
                    </td>  
                    @else
                    <td>
                        @if($order->status == 'Cancelado')
                            <i class="fa fa-check-circle-o fa-2x text-green"></i>
                        @else
                            {!! Form::open(['route' => ['painel.order.cancel','id' => $order->id ] ]) !!}
                            {!! Form::btnOrderCancel() !!}
                            {!! Form::close()!!}
                        @endif
                    </td>  
                    @endif  
                </tr>
            @endforeach
        </table>
    </div>
@endsection


