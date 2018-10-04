 {{-- Carousel --}}


 <div id="carouselExampleIndicators" class="carousel slide p-0 m-0" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active p-0">
      <img class="d-block  w-100" src="{{ asset('assets/site/img/product-img/slide/slide_sales.png') }}" alt="First slide">
    </div>
    <div class="carousel-item p-0">
      <img class="d-block w-100" src="{{ asset('assets/site/img/product-img/slide/slide_sales.png') }}" alt="Second slide">
    </div>
    <div class="carousel-item p-0">
      <img class="d-block w-100" src="{{ asset('assets/site/img/product-img/slide/slide_sales.png') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>