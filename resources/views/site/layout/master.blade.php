<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- include head  -->
    @include('site.layout.includes.head')
</head>

<body>
  <div class="container">

    <!-- include nav -->
    @include('site.layout.includes.nav')

    <!-- include slide -->
    @include('site.layout.includes.content')

    <!-- includde yeld -->
    @yield('content')
    
    <!-- Footer -->
    <div class="footer">
      <div class="links ">
        <ul class="nav d-inline-block d-md-inline-flex">
          <li class="nav-item">
            <a class="nav-link text-secondary" href="{{ route('site.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="{{ route('product.new') }}">Novidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="{{ route('product.sale') }}">Ofertas</a>
          </li>
        </ul>
        <ul class="nav d-inline-block d-md-inline-flex">
         
          <li class="nav-item">
            <a class="nav-link text-secondary" href="{{ url('/dealer')}}">Revendedor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="{{ route('site.contact') }}">Contato</a>
          </li>
        </ul>

        <div class="d-none d-md-block social-d">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link social-icons" href="#">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link social-icons" href="#">
                <i class="fa fa-youtube-square" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link social-icons" href="#">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link social-icons" href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
          </ul>
        </div>

      </div>

      <div class="social-networks">

        <div class="address">
          <p>
            <span class="font-weight-bold h6">Kaeller Roupas</span>
            <br>(21) 99999-9999 / (21) 3333-4455
            <br>Belford Roxo - Retiro Feliz </p>
        </div>

        <div class="d-block d-md-none">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link social-icons" href="#">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link social-icons" href="#">
                <i class="fa fa-youtube-square" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link social-icons" href="#">
                <i class="fa fa-google-plus-square" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="copyright text-muted">
          <p>Kaeller
            <i class="fa fa-copyright" aria-hidden="true"></i> | Todos os direitos reservados.</p>
          <P>
            <a class="btn-link text-light" href="https://facebook.com/genildo.k" target="_blank">GK Desenvolvimento</a>
          </P>
        </div>


      </div>

    </div>
    <!-- Fin do container -->
  </div>
  
    <!-- include scripts -->
    @include('site.layout.includes.scripts')
</body>

</html>