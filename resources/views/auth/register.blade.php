@extends('site.layout.auth')
 @section('content')
<div class="container pt-5">
  <div class="row">
    <div class="col-md-7 col-12 col-left">
      <div class="container-left d-none d-md-block">
        <div class="container-left-logo">
          <img src="{{ asset('assets/site/img/logo.png') }}" class="img-rounded" alt="Login Image">
        </div>
        <!-- include footer -->
        @include('site.layout.includes.footer')
      </div>
      <!-- /container-left -->
    </div>

    <div class="col-12 col-md-5 col-right">
      <div class="header-form">
        <h1 class="text-muted text-center p-4">Criar usúario</h1>
      </div>
      <div class="container-right">
        <hr class="my-3">
        <form class="form-check-inline login-form" action="{{ route('register') }}" method="post">
          <div class="form-group">
            <label for="user">Usuário:</label>
            <input type="text" name="firstName" class="form-control" placeholder="Nome" aria-describedby="helpId">
              @if($errors->has('name'))
                <small id="helpId" class="text-danger">{{ $errors->first('name') }}</small>
              @endif
          </div>
          <div class="form-group">
            <label for="user">Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Digite seu email" aria-describedby="helpId">
              @if($errors->has('email'))
                <small id="helpId" class="text-danger">{{ $errors->first('email') }}</small>
              @endif
          </div>
          <div class="form-group">
            <label for="">Senha:</label>
            <input type="password" class="form-control" name="password" placeholder="Senha">
              @if($errors->has('password'))
                <small id="helpId" class="text-danger">{{ $errors->first('email') }}</small>
              @endif
          </div>
          <div class="form-group">
            <label for="confirm">Senha:</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Repita a senha">
              @if($errors->has('password_confirmation'))
                <small id="helpId" class="text-danger">{{ $errors->first('password_confirmation') }}</small>
              @endif
          </div>
          <div class="row pr-3 pl-3">
            <div class="col-6">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-primary btn-block mt-4">Criar</button>
            </div>
            <div class="col-6">
              <button type="button" onclick="location.href='{{ route('login') }}'" class="btn btn-warning btn-block  mt-4">Voltar</button>
            </div>
          </div>
          <hr class="my-3">
        </form>
      </div>
    </div>
  </div>
  <!-- include footer -->
  <div class="d-block d-md-none address">
    @include('site.layout.includes.footer')
  </div>
</div>