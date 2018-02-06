<!doctype html>
<html lang="pt">

<head>
  <title>Novo Usuário</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom style CSS -->
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-7 col-left d-none d-md-block">
        <div class="container-left">
          <div class="container-left-logo">
            <img src="logo.png" class="img-rounded" alt="Login Image">
          </div>


          <div class="social-networks">

            <div class="address">
              <p class="text-center pt-3">
                <span class="font-weight-bold h6">Kaeller Multimarcas</span>
                <br>(21) 99999-9999 / (21) 3333-4455
                <br>Belford Roxo - Retiro Feliz </p>
            </div>

            <div class="">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link social-icons" href="#">
                    <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link social-icons" href="#">
                    <i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link social-icons" href="#">
                    <i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>

            <div class="copyright text-muted text-center">
              <p>Kaeller Multimarcas
                <i class="fa fa-copyright" aria-hidden="true"></i> 2018 | Todos os direitos reservados.</p>
              <P>
                <strong>Desenvolvido por</strong>
                <p class="text-secondary">Gk WebDev
                  <br> genildok@hotmail.com
                  <br>      <a href="https://api.whatsapp.com/send?phone=5521975402501&text=Olá, gostei do site do kaeller multimarcas e gostatia de um orçamento." target="_blank">
                    <i class="fa fa-whatsapp fa-1x text-success" aria-hidden="true"></i> (21) 97540-2501</a></p>
              </P>
            </div>


          </div>

        </div>
        <!-- /container-left -->
      </div>
      <div class="col-12 col-md-5 col-right">
        <div class="header-form">
          <h1 class="text-muted text-center py-3">Novo usuário</h1>
        </div>
        <div class="container-right">
          <hr class="my-3">
          <form class="form-check-inline login-form" action="{{ route('login') }}" method="post">
            <div class="form-group">
              <label for="user">Usuário:</label>
              <input type="email" name="name" class="form-control" placeholder="Digite seu email" aria-describedby="helpId">
              <small id="helpId" class="text-danger"></small>
            </div>
            <div class="form-group">
              <label for="">Senha:</label>
              <input type="password" class="form-control" name="password" placeholder="Senha">
            </div>
            <div class="form-group">
              <label for="confirm">Confirmar Senha:</label>
              <input type="password" class="form-control" name="password-confirm" placeholder="Confirme a senha">
            </div>
            <div class="row pr-3 pl-3">
              <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block mt-4">Criar</button>
              </div>
              <div class="col-6">
                  <a href="login.blade.php" class="">
                    <button type="button" class="btn btn-warning btn-block  mt-4">Login</button>
                  </a>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row d-block d-md-none">
      <div class="col-12 col-md-12 developer">
        <ul class="nav justify-content-center justify-content-md-start">
          <li class="nav-item text-center">
            <strong>Desenvolvido por</strong>
            <p class="text-secondary">Gk WebDev
              <br> genildok@hotmail.com
              <br>
              <a href="https://api.whatsapp.com/send?phone=5521975402501&text=Olá, gostei do site do kaeller multimarcas e gostatia de um orçamento." target="_blank">
                <i class="fa fa-whatsapp text-success" aria-hidden="true"></i> (21) 97540-2501</a>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
</body>

</html>