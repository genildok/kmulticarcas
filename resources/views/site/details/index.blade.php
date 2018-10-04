@extends('site.layout.master')

@section('content')

<div class="container mt-5">
    <div class="row mt-3">
        <div class="col-sm-12 col-md-6">
            <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="d-flex justify-content-center">

                            <div class="content-img">
                                <img id="zoom" src="{{ asset('assets/painel/img/' . $product[0]->image) }}"  alt="" class="img-responsive">
                            </div>

                        </div>
                    </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="container">
                <div class="form-group header">
                    <h2 class="text-dark">{{ $product[0]->product_id . ' - ' . $product[0]->name ." / ". $product[0]->description }}</h2>
                </div>
                <div class="form-group mt-4 price">
                    <span class="text-dark">Preço a Vista</span>
                    <br>
                    <h2 class="text-danger text-price">R$ {{ number_format($product[0]->price ,2,',','.') }}</h2>
                </div>

                <div class="card p-2 d-block">
                    <div class="card-body d-block">
                        <div class="form-group">
                            {{-- Form add cart --}}
                            <form action="{{ route('cart.add') }}" method="POST">
                            @if ($product[0]->quantity > 0)
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="lead">
                                                <label for="color" class="text-secondary">Cores</label>
                                            </div>
                                            <div class="form-group">
                                                
                                                <select name="color" id="color" class="form-control color">
                                                            
                                                        {{-- @foreach ($product->unique('color') as $item)
                                                            @if($item->quantity_item > 0)
                                                                <option value="{{ $item->color }}">{{ $item->color }}</option>
                                                            @endif
                                                        @endforeach --}}

                                                        @foreach ($product[0]->features->unique('color') as $item)
                                                        @if($item->quantity_item > 0)
                                                            <option value="{{ $item->color }}">{{ $item->color }}</option>
                                                        @endif
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="lead">
                                                <label for="quntity" class="text-secondary">Quantidade</label>
                                            </div>
                                            <div class="btn-group">
                                                <input type="number" value="1" name="quantity" class="form-control quantity">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="lead">
                                            <label for="quntity" class="text-secondary">Tamanhos</label>
                                        </div>
        
                                        <div class="btn-group" data-toggle="buttons">
                                            {{-- @foreach ($product->unique('size') as $key => $item)
                                                @if($item->quantity_item > 0)
                                                    <label for="" class="btn btn-primary ml-3 {{ $key == 0 ? 'active' : '' }}">{{ $item->size }}
                                                        <input type="radio" name="size"  autocomplete="off" value="{{ $item->features }}" {{ $key == 0 ? 'checked' : '' }}>
                                                    </label>
                                                @endif
                                            @endforeach --}}


                                            @foreach ($product[0]->features->unique('size') as $key => $item)
                                            @if($item->quantity_item > 0)
                                                <label for="" class="btn btn-primary ml-3 {{ $key == 0 ? 'active' : '' }}">{{ $item->size }}
                                                    <input type="radio" name="size"  autocomplete="off" value="{{ $item->size }}" {{ $key == 0 ? 'checked' : '' }}>
                                                </label>
                                            @endif
                                        @endforeach


                                        </div>
                                    </div>
                                </div> <!-- /row -->
                                <hr class="my-3">
                            @endif
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $product[0]->id }}">
                               @if ($product[0]->quantity > 0)
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="btn-group">
                                                <button class="btn btn-warning btn-block" type="submit">
                                                    <i class="fa fa-shopping-cart"></i> Colocar no carrinho
                                                </button>
                                            </div>
                                        </div>
                                    </div>    
                               @else
                                <button class="btn btn-danger btn-block" type="submit">
                                    <i class="fa fa-envelope"></i> Avise-me quando chegar
                                </button>
                               @endif
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- /row img -->
    <div class="title-similar">
        <p class="text-secondary">Produtos Relacionados</p>
        <hr class="">
    </div>
    <!-- Slide de produtos relacionados -->
    <div class="carousel slide" id="similar-img" data-ride="carousel">
        @include('site.layout.includes.slide_similar')
    </div>
</div>
@endsection