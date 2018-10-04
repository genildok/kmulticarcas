<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('assets/painel/img/logo.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Procurar...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU ADMIM</li>

            <li  class="treeview {{ Request::is('painel') ? "active" : "" }}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li class="{{ Request::is('painel') ? "active" : "" }}"><a href="{{ route('painel.dashboard') }}"><i class="fa fa-circle-o"></i> Inicio</a></li>
              </ul>
            </li>

            <li class="treeview  {{ Request::is('painel/produto/*') ? "active" : "" }}">
              <a href="#">
                <i class="fa fa-dashboard"></i><span>Produto</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu {{ Request::is('painel/produto/*') ? "active" : "" }}">
              <li class="{{ Request::is('painel/produto/novo') ? "active" : "" }}"><a href="{{ route('painel.product.create') }}"><i class="fa fa-circle-o"></i>Novo</a></li>
              <li class="{{ Request::is('painel/produto/editar') || Request::is('painel/produto/editar/*') ? "active" : "" }}"><a href="{{ route('painel.product.list') }}"><i class="fa fa-circle-o"></i>Listar</a></li>
              <li class="{{ Request::is('painel/produto/remover') ? "active" : "" ||  Request::is('painel/produto/remover/*') ? "active" : ""}}"><a href="{{ route('painel.product.delete') }}"><i class="fa fa-circle-o"></i>Remover</a></li>
              </ul>
            </li>

          <li class="treeview {{ Request::is('painel/pedido/*') ? "active" : "" }}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Pedido</span>
                <span class="pull-right-container"> 
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu {{ Request::is('painel/pedido/*') ? "active" : "" }}">
              <li class="{{ Request::is('painel/pedido/listar') ? "active" : "" || Request::is('painel/pedido/listar/*') ? "active" : "" }}" ><a href="{{ route('painel.order.list') }}"><i class="fa fa-circle-o"></i>Listar</a></li>
              <li class="{{ Request::is('painel/pedido/cancelar') ? "active" : ""  }}" ><a href="{{ route('painel.order.list_cancel') }}"><i class="fa fa-circle-o"></i>Cancelar</a></li>
              </ul>
            </li>

          <li class="treeview {{ Request::is('painel/fornecedor/*') ? "active" : "" }}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Fornecedor</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li class="{{ Request::is('painel/fornecedor/novo') ? "active" : "" }}" ><a href="{{ route('painel.supplier.create') }}"><i class="fa fa-circle-o"></i>Novo</a></li>
              <li class="{{ Request::is('painel/fornecedor/editar') || Request::is('painel/fornecedor/editar/*') ?  "active" : "" }}" ><a href="{{ route('painel.supplier.list') }}"><i class="fa fa-circle-o"></i>Listar</a></li>
              <li class="{{ Request::is('painel/fornecedor/remover') ? "active" : "" }}" ><a href="{{ route('painel.supplier.delete') }}"><i class="fa fa-circle-o"></i>Remover</a></li>
              </ul>
            </li>

          <li class="treeview {{ Request::is('painel/marca/*') ? "active" : "" }}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Marca</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li class="{{ Request::is('painel/marca/novo') ? "active" : "" }}" ><a href="{{ route('painel.brand.form') }}"><i class="fa fa-circle-o"></i>Novo</a></li>
              <li class="{{ Request::is('painel/marca/editar') || Request::is('painel/marca/editar/*') ?  "active" : "" }}" ><a href="{{ route('painel.brand.list') }}"><i class="fa fa-circle-o"></i>Listar</a></li>
              {{-- <li class="{{ Request::is('painel/marca/remover') ? "active" : "" }}" ><a href="{{ route('painel.brand.delete') }}"><i class="fa fa-circle-o"></i>Remover</a></li> --}}
              </ul>
            </li>
          <li class="treeview {{ Request::is('painel/cupom') ? "active" : "" }}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Cupom</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::is('painel/produto/editar') || Request::is('painel/produto/editar/*') ? "active" : "" }}"><a href="{{ route('painel.product.list') }}"><i class="fa fa-circle-o"></i>Novo</a></li>
                <li class="{{ Request::is('painel/cupom') || Request::is('painel/cupom/') ?  "active" : "" }}" ><a href="{{ route('painel.coupon.index') }}"><i class="fa fa-circle-o"></i>Listar</a></li>
              </ul>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>
    