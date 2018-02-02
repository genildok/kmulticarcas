@extends('site.layout.master')

@section('content')
    <div class="card ">
        <div class="card-header ">
          <span class="new-itens">Lançamentos</span>
        </div>
        <!-- row Galeria -->
        <div class="row text-center text-lg-left my-3 ml-md-5">
  
          <!-- col Galeria -->
          <div class="col-6 col-lg-3">
  
            <div class="card-block card-width mb-5">
              <div class="card-header  text-light text-center text-md-left bg-dark">
                Camisa Polo
              </div>
              <img src="assets/site/img/product-img/01.jpg" class="card-img" alt="">
              <hr>
              <div class="card-subtitle">
                <p class="text-danger font-weight-bold pl-2">R$ 65,00
                  <span class="text-dark font-italic font-weight-normal">
                    <br> ou parcelado no
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    com juros de 6%.</span>
                </p>
              </div>
              <hr>
              <div class="card-footer footer-img-content p-0 mb-1 border-0">
              <a href="{{ route('site.show','01') }}" class="nav-link  bg-dark text-light ">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
                  Detalhes
                </a>
              </div>
  
            </div>
            <!-- /col Galeria -->
          </div>
  
          <!-- col Galeria -->
          <div class="col-6 col-lg-3">
  
            <div class="card-block card-width mb-5">
              <div class="card-header  text-light text-center text-md-left bg-dark">
                Camisa Polo
              </div>
              <img src="assets/site/img/product-img/01.jpg" class="card-img" alt="">
              <hr>
              <div class="card-subtitle">
                <p class="text-danger font-weight-bold pl-2">R$ 65,00
                  <span class="text-dark font-italic font-weight-normal">
                    <br> ou parcelado no
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    com juros de 6%.</span>
                </p>
              </div>
              <hr>
              <div class="card-footer  footer-img-content p-0 mb-1 border-0">
                <a href="{{ route('site.show','02') }}" class="nav-link  bg-dark text-light ">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
                  Detalhes
                </a>
              </div>
  
            </div>
            <!-- /col Galeria -->
          </div>
  
  
  
          <!-- col Galeria -->
          <div class="col-6 col-lg-3">
  
            <div class="card-block card-width mb-5">
              <div class="card-header  text-light text-center text-md-left bg-dark">
                Camisa Polo
              </div>
              <img src="assets/site/img/product-img/01.jpg" class="card-img" alt="">
              <hr>
              <div class="card-subtitle">
                <p class="text-danger font-weight-bold pl-2">R$ 65,00
                  <span class="text-dark font-italic font-weight-normal">
                    <br> ou parcelado no
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    com juros de 6%.</span>
                </p>
              </div>
              <hr>
              <div class="card-footer footer-img-content p-0 mb-1 border-0">
                <a href="{{ route('site.show','03') }}" class="nav-link  bg-dark text-light ">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
                  Detalhes
                </a>
              </div>
  
            </div>
            <!-- /col Galeria -->
          </div>
  
          <!-- col Galeria -->
          <div class="col-6 col-lg-3">
  
            <div class="card-block card-width mb-5">
              <div class="card-header  text-light text-center text-md-left bg-dark">
                Camisa Polo
              </div>
              <img src="assets/site/img/product-img/01.jpg" class="card-img" alt="">
              <hr>
              <div class="card-subtitle">
                <p class="text-danger font-weight-bold pl-2">R$ 65,00
                  <span class="text-dark font-italic font-weight-normal">
                    <br> ou parcelado no
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    com juros de 6%.</span>
                </p>
              </div>
              <hr>
              
              <div class="card-footer footer-img-content p-0 mb-1 border-0">
                <a href="{{ route('site.show','04') }}" class="nav-link  bg-dark text-light ">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
                  Detalhes
                </a>
              </div>
  
            </div>
            <!-- /col Galeria -->
          </div>
        </div>
        <!-- /row galeria -->
      </div>
      <!-- Fim card -->
@endsection