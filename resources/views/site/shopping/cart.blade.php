@extends('site.layout.master')

@section('content')

<div class="row">
    <div class="col-sm-12 col-md-8" style="overflow-y: scroll;height:30rem">
          <!-- Itens do carrinho -->
       
          @foreach ($cart->getItems() as $key => $cart_items )
            <div class="row border-bottom">
                <div class="col-sm-12 col-md-6">
                    <div class="card-group pb-3">
                        <div class="card d-flex flex-row pt-5 border-0">
                        <div class="d-block">
                            <a href="{{ route('product.show',['id' => $cart_items['item']->id]) }}">
                                <img class="card-img-top img-thumbnail" src="{{ asset('assets/painel/img/' . $cart_items['item']->image) }}" alt="Card image cap" style="width:100px;height:125px;min-width:100px">
                            </a>
                        </div>
                        <div class="card-body pt-0 d-block">
                                <h5 class="card-title text-secondary"> <a href="{{ route('product.show',['id' => $cart_items['item']->id]) }}">{{ $cart_items['item']->name }}</a> </h5>
                            <div class="mr-1">
                            <span for="" class="text-muted" >Tamanho : <strong class="text-primary">{{ $cart_items['size'] }}</strong> </span>
                            </div>
                            <div class="">
                            <span for="" class="text-muted">Cor : <strong class="text-primary">{{ $cart_items['color'] }}</strong> </span>
                            </div>
                            <div class="">
                                <span class="label label-default text-muted mr-1">Quantidade :</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-primary pt-0 pb-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $cart_items['qty']  }}
                                    </button>
                                    <div class="dropdown-menu m-0 p-0" style="min-width:3px">
                                        
                                        <form action="{{ route('cart.update.quantity') }}" method="post" class="m-0 p-0">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{ $key  }}">
                                            <input type="submit" name="quantity" value="+1" class="btn btn-link btn-block dropdown-item" />    
                                            <input type="submit" name="quantity" value="-1" class="btn btn-link btn-block dropdown-item" />    
                                        </form>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-none">
                            <a href="{{ route('cart.remove',['id' => $key] ) }}"><i class="fa fa-trash fa-2x text-danger p-0 m-0"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mt-md-5 pb-md-4">

                        <span class="label label-default mr-4 mr-md-3 text-secondary">Preço R$</span>
                        <span class="label label-default ml-3 ml-md-4 text-secondary">Total R$</span>

                        <div class="card border-0">
                            <div class="card-body p-0">
                            <input type="text" class="form-control d-inline mr-4 text-center bg-light" disabled name="" value="{{ $cart_items['item']->price }}" style="width:5rem">
                            <input type="text" class="form-control d-inline text-center bg-light" disabled name="" value="{{ $cart_items['price'] }}" style="width:5rem">
                                <a href="{{ route('cart.remove',['id' => $key] ) }}" class="btn btn-outline-danger ml-3 d-none  d-md-inline p-2">
                                <i class="fa fa-times-circle"></i> Remover
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr class="">
          @endforeach
    </div>
    <!-- container dos valores-->
    <div class="col-sm-12 col-md-4">
      <div class="total-items float-md-right mt-4">
        <div class="list-group">

          <div class="list-group-item list-group-item-info mb-3 ">
            <span class="label label-default">Válidar Cupom</span>
            <form action="{{ route('coupon.validate') }}" class="form-inline" method="POST">

                <div class="form-group  mb-2">
                    <input type="text" name="coupon" class="form-control" value="" placeholder="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <button type="submit" class="btn btn-primary mb-2 ml-1">OK</button>
                @if (Session()->get('error'))
                <strong class="text-danger text-center h4">{{ Session()->get('error') }}</strong>
            @endif
              </form>

          </div>

            <label class="d-block text-dark h3" for="">Total R$ <strong class="text-danger float-right"> {{ $cart->format($cart->getTotalCart())}}</strong></label>
            <label class="d-block h3" for="">Desconto R$<strong class="text-success float-right"> {{ $cart->format($cart->getDiscount()) }}</strong></label>
            <label class="list-group-item list-group-item-danger h3" for="">Subtotal R$<strong class="text-danger float-right h3">{{ $cart->format($cart->getSubTotal()) }}</strong></label>
        </div>

        <div class="btn-checkout pt-4 pb-2">
            <a class="btn btn-success btn-lg d-block mb-1" href="#" role="button">Finalizar Pedido</a>
            <a class="btn btn-warning btn-lg d-block" href="{{ route('product.new') }}" role="button">Comprar Mais</a>
        </div>

      </div>

    </div>
 </div> <!--/row -->



@endsection