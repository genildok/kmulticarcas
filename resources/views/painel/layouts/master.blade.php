<!DOCTYPE html>
<html>
    @include('painel.includes.head')
<head>
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    @include('painel.includes.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
    @include('painel.includes.sidebar')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      @include('painel.includes.page_header')
    <!-- Main content -->
    <section class="content">
      @if (Session::get('success'))
        <div class="callout callout-success">
            <p>{{ Session::get('success') }}</p>
        </div>
      @endif
      @include('painel.includes.boxes')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $subTitle or 'Informações de Estoque' }}</h3>
        </div>
        <div class="box-body">
            @yield('content')
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://facebook.com/genildo.k">GkDeveloper</a>.</strong> Todos os direitos reservdos.
  </footer>
</div>
<!-- ./wrapper -->

  @include('painel.includes.scripts')
</body>
</html>
