<!-- Footer -->
<div class="row footer">
  <!-- row links -->
  @if(!request()->is('login') and !request()->is('register'))
    <div class="col-md-12 links">
        <nav class="nav justify-content-center">
            <a class="nav-link" href="{{ route('site.index') }}">Home</a>
            <a class="nav-link" href="{{ route('product.new') }}">Novidades</a>
            <a class="nav-link" href="{{ route('product.sale') }}">Ofertas</a>
            <a class="nav-link" href="{{ url('/dealer')}}">Revenda</a>
            <a class="nav-link" href="{{ route('site.contact') }}">Contato</a>
          </nav>
    </div>
    <div class="col-md-6 pagseguro">
      <img src="{{ asset('assets/site/img/pagseguro.png') }}" width="290" alt="">
    </div>
  @endif
    <!-- col address -->
    <div {{ request()->is('login') ? 'class=col-md-12 col-12' : 'class=col-md-6 col-12' }} >
      <div class="address">
        <h4>Kaeller Multimarcas</h4>
        (21) 3358-5247 |
        <i class="fa fa-whatsapp text-success" aria-hidden="true"></i> (21) 91234-5678
        <br>
        <strong>Belford Roxo - São Vicente</strong>
      </div>
      <!-- social networks icons -->
      <div class="social">
          <ul class="nav justify-content-start">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-whatsapp fa-2x text-dark" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-facebook fa-2x text-dark" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">
                <i class="fa fa-youtube fa-2x text-dark" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
    </div>
  <!-- col copyright -->
  @if(!request()->is('login') and !request()->is('register'))
      <div class="col-md-10 copyright">
          <div class="">
              <span>
                <i class="fa fa-copyright" aria-hidden="true"></i> 2018 | Todos os direitos reservados.
              </span>
            </div>
      </div>
      <div class="col-md-2 copydev">
          <div class="text-center">
              <span>
                  <i class="fa fa-facebook-official" aria-hidden="true"></i>
                  <a class="text-white" href="http://facebook.com/genildo.k">  GK DEVELOPER</a>
                <span class="d-block d-md-none text-center pt-2">
                  <i class="fa fa-whatsapp text-success" aria-hidden="true"></i>
                  <a class="text-white" href="http://">(21) 97540-2501</a>
                  <br>
                  <span>genildok@hotmail.com</span>
                </span> 
              </span>
            </div>
      </div>
  @endif

</div>