 {{-- Carousel --}}

<div id="carouselId" class="carousel carousel-index slide carousel-index" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    @for ($i = 0; $i < 3; $i++) @if ($i==1 ) 
    
    <div class="carousel-item active">
        <div class="img-item-index">
          <div class="row">
            <div class="col-md-4 d-none d-md-block">
              <div class="description">
                <h5 class="title-item">Nike Tube</h5>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="carousel-img">
                <img class="img-responsive" src="{{ asset('assets/site/img/product-img/slide/002.png') }}" alt="First slide">
              </div>
            </div>
            <div class="col-12 col-md-4 d-none d-md-block">
              <div class="price">
                <h5 class="title-item">R$ 120,00</h5>
              </div>
            </div>
          </div>
        </div>
    </div>
  @else
  <div class="carousel-item">
      <div class="img-item-index">
        <div class="row">
          <div class="col-md-4 d-none d-md-block">
            <div class="description">
              <h5 class="title-item">Reserva Poló</h5>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="carousel-img">
              <img class="img-responsive" src="{{ asset('assets/site/img/product-img/slide/003.png') }}" alt="First slide">
            </div>
          </div>
          <div class="col-12 col-md-4 d-none d-md-block">
            <div class="price">
              <h5 class="title-item">R$ 120,00</h5>
            </div>
          </div>
        </div>
      </div>
  </div>
  @endif 
  @endfor

</div>
<a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
  <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>

<!-- Row infomation -->
<div class="row">
  <div class="col-12 col-md-6 col-lg-4 mt-3">
    <div class="card">
      <i class="fa fa-credit-card-alt fa-5x mt-2 mb-2 ml-auto mr-auto" aria-hidden="true"></i>
      <div class="card-header bg-dark text-light">
        <h1 class="h1">Compra Facíl</h1>
        <h6 class="card-subtitle mt-2 text-muted">
          Compre com segurança.
        </h6>
      </div>
      <div class="card-body">
        <p class="text-center">
          Compre com cartão de crédito.
          <br> O pagamento é feito direto no sistema do PagSeguro.
          <br>
        </p>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-6 col-lg-4 mt-3">
    <div class="card">
      <i class="fa fa-truck fa-5x mt-2 mb-2 ml-auto mr-auto" aria-hidden="true"></i>
      <div class="card-header bg-dark text-light">
        <h1 class="">Entrega Facíl</h1>
        <h6 class="card-subtitle mt-2 text-muted">
          Receba com rapidez e segurança.
        </h6>
      </div>
      <div class="card-body text-center">
        <p class="">
          Sua entrega é garantida.
          <br> Leva só 5 dias para postar.
          <br> Aconpanhe o andamento do seu pedido.
        </p>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-4 my-3">
    <div class="card">
      <i class="fa fa-shopping-bag fa-5x  mt-2 mb-2 ml-auto mr-auto" aria-hidden="true"></i>
      <div class="card-header bg-dark text-light">
        <h1 class="text-light">Produtos</h1>
        <h6 class="card-subtitle mt-2 text-muted">
          Qualidade e preço justo.
        </h6>
      </div>
      <div class="card-body text-center">
        <p class="">
          Produtos de qualidade.
          <br> Preços imbativeis.
          <br> Desconto para pagamentos a vista.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Row infomation -->