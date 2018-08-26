@if (Request::is('painel/produto/remover/*'))

    <div class="col-md-12 text-center text-red">
        <img src="{{ asset('assets/painel/img/' . $product->image) }}" class="img-responsives" width="150" alt="">
        <h3> Remover este produto ?</h3>
        {!! Form::open(['route'=>['painel.product.delete.submit','id' => $product->id ],'method'=>'post']) !!}
        {!! Form::btnDeleteProduct($product) !!}           
        {!! Form::close() !!}
    </div>

@endif

@if (Request::is('painel/pedido/confirmar/*'))
    
    <div class="col-md-4" style="border-right: 1px solid #ddd">
           
        <div class="form-group">
            {!! Form::label('Pedido N°') !!}
            {!! Form::text('order_id',$order->id,['class' => 'form-control','disabled','style' => 'width:80px']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Cliente') !!}            
            {!! Form::text('customer',$order->user->firstName .' '. $order->user->lastName ,['class' => 'form-control','disabled']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Situação') !!}            
            {!! Form::text('status',$order->status,['class' => 'form-control','disabled']) !!}
        </div>
    </div>
    <div class="col-md-8">
        <div class="box-body no-padding">
            <table class="table table-striped text-center">
                <tr>
                    <th>Produto</th>
                    <th class="hidden-xs" >Preço</th>
                    <th>Qtd</th>
                    <th>Disconto</th>
                    <th>Cor</th>
                    <th>Size</th>
                    <th class="hidden-xs">Total R$</th>
                    <th {{ $order->status == 'Pendente' ? '' : 'hidden' }}>Ação</th>
                </tr>
            @foreach ($order->orderDetails as $detail)
                <tr>
                    <td>{{ $detail->product->name}}</td>
                    <td class="hidden-xs" >{{ $detail->price }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>{{ $detail->discount }}</td>
                    <td>{{ $detail->color }}</td>
                    <td>{{ $detail->size }}</td>
                    <td  class="hidden-xs" >{{ $detail->total }}</td>
                    <td {{ $order->status == 'Pendente' ? '' : 'hidden' }}>
                        <a  href="{{ route('painel.order.edit',['id' => $order->id ]) }}" class="btn btn-link"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
    <div class="col-md-12 border-left">
        {!! Form::open(['route' => ['painel.order.confirm','id' => $order->id ],'method' => 'post' ]) !!}
            @if ($order->status == 'Pendente')
                {!! Form::btnOrderBack() !!}
            @else
                {!! Form::btnConfirmOrder() !!}
            @endif
        {!! Form::close() !!}
    </div>
@endif




