<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- include head  -->
    <?php echo $__env->make('site.layout.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body>
  <div class="container">

    <!-- include nav -->
    <?php echo $__env->make('site.layout.includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- include slide -->
    <?php echo $__env->make('site.layout.includes.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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

    <!-- includde yeld -->
    <?php echo $__env->yieldContent('content'); ?>
    
    <!-- Footer -->
    <div class="footer">
      <div class="links ">
        <ul class="nav d-inline-block d-md-inline-flex">
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo e(url('/')); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo e(url('/news')); ?>">Novidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo e(url('/sales')); ?>">Ofertas</a>
          </li>
        </ul>
        <ul class="nav d-inline-block d-md-inline-flex">
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo e(url('/brand')); ?>">Marcas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo e(url('/dealer')); ?>">Revendedor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo e(url('/contact')); ?>">Contato</a>
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
    <?php echo $__env->make('site.layout.includes.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>