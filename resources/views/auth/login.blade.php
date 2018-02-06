@extends('site.layout.auth')

@section('content')
<div class="container pt-5">
  <div class="row">
    <div class="col-md-7 col-left d-none d-md-block">
      <div class="container-left">
        <div class="container-left-logo">
          <img src="{{ asset('assets/site/img/logo.png') }}" class="img-rounded" alt="Login Image">
        </div>
      <!-- Include social networks -->
      @include('site.layout.includes.social')
      </div>
      <!-- /container-left -->
    </div>
    <div class="col-12 col-md-5 col-right">
      <div class="header-form">
        <h1 class="text-muted text-center p-4">Login</h1>
      </div>
      <div class="container-right">
        <hr class="my-3">
        <form class="form-check-inline login-form" action="{{ route('login') }}" method="post">
          <div class="form-group">
            <label for="user">Usuário:</label>
            <input type="text" name="name" class="form-control" placeholder="Digite seu email" aria-describedby="helpId">
            <small id="helpId" class="text-danger"></small>
          </div>
          <div class="form-group">
            <label for="">Senha:</label>
            <input type="password" class="form-control" name="password" placeholder="Senha">
          </div>
          <div class="row pr-3 pl-3">
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block mt-4">Entrar</button>
            </div>
            <div class="col-6">
              
                <button type="button" onclick="location.href='{{ route('site.index') }}'" class="btn btn-warning btn-block  mt-4">Voltar</button>
             
            </div>
          </div>

          <hr class="my-3">
          <a class="btn btn-link text-center" href="register.blade.php" role="button">Criar conta</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Include fone developer -->
  @include('site.layout.includes.dev_fone')
</div>