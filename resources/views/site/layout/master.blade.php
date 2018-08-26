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
    
    <!-- include footer -->
    @include('site.layout.includes.footer')
    <!-- Fin do container -->
  </div>
  
    <!-- include scripts -->
    @include('site.layout.includes.scripts')
</body>

</html>