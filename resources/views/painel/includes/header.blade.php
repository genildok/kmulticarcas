<header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>KM </b>ADM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>KM </b>ADMIN</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
    
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('assets/painel/img/logo.png') }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('assets/painel/img/logo.png') }}" class="img-circle" alt="User Image">
    
                    <p>
                      {{ Auth::user()->name }} - Proprietário
                      {{--  <small>Member since Nov. 2012</small>  --}}
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                    </div>
                    <div class="pull-right">
                       {!! Form::open(['route' => 'admin.logout.submit','method' => 'post']) !!}
                            {!! Form::submit('Sign out',['class' => 'btn btn-default btn-flat']) !!}
                       {!! Form::close() !!}
                    </div>
                  </li>
                </ul>
              </li>
            
            </ul>
          </div>
        </nav>
      </header>