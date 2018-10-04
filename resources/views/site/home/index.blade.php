@extends('site.layout.master')

@section('content')
    <div class="card ">
        <div class="card-header ">
          <span class="new-itens">Lançamentos</span>
        </div>
        <!-- row Galeria -->
        <div class="row text-center text-lg-left my-3 ml-md-5">
  
          <!-- col Galeria -->
          @foreach ($products as $product)
            <div class="col-6 col-lg-3">
    
              <div class="card-block card-width mb-5 border-1">
                <div class="card-header  text-light text-center text-md-left bg-dark">
                    {{ $product->brand->brand }}
                </div>
                <img src="{{ asset('assets/painel/img/' . $product->image) }}" class="card-img" alt="">
                <hr>
                <div class="card-subtitle">
                  <p class="text-danger font-weight-bold pl-2">R$ {{ number_format($product->price,2,',','.') }}
                    <span class="text-dark font-italic font-weight-normal">
                      <br> ou parcelado no
                      <i class="fa fa-credit-card" aria-hidden="true"></i>
                      com juros de 6%.</span>
                  </p>
                </div>
                <hr>
                <div class="footer-img-content p-0 mb-1 border-0">
                <a href="{{ route('product.show', ['id' => $product->id ]) }}" class="nav-link  bg-dark text-light ">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Detalhes
                  </a>
                </div>
              </div>
              <!-- /col Galeria -->
            </div>
          @endforeach
          

        </div>
        <!-- /row galeria -->
      </div>
      <!-- Fim card -->
@endsection