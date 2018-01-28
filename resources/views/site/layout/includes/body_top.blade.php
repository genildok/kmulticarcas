
{{-- Carousel --}}

<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselId" data-slide-to="0" class="active"></li>
      <li data-target="#carouselId" data-slide-to="1"></li>
      <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item  active">
        <div class="carousel-img">
          <img class="img-fluid" src="{{ asset('assets/site/img/product-img/slide/01.png') }}" alt="First slide">
        </div>
        <div class="carousel-caption d-none d-sm-block">
          <h3>Olympikus Tube</h3>
          <p>Qualidade e preço justo.</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img">
          <img class="img-fluid" src="{{ asset('assets/site/img/product-img/slide/02.png') }}" alt="First slide">
        </div>
        <div class="carousel-caption d-none d-sm-block">
          <h3>Nike Flex</h3>
          <p>Qualidade e preço justo.</p>
        </div>
      </div>
      <div class="carousel-item">

        <div class="carousel-img">
          <img class="img-fluid" src="{{ asset('assets/site/img/product-img/slide/03.png') }}" alt="First slide">
        </div>

        <div class="carousel-caption d-none d-sm-block">
          <h3>Adidas Neo</h3>
          <p>Qualidade e preço justo.</p>
        </div>

      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  {{-- Card  --}}


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