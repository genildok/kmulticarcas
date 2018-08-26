<section class="content-header">
    <h1>
       {{ $title or 'Dashboard' }}
      <small></small>
    </h1>
  <ol class="breadcrumb">
    <li class="fa fa-dashboard"> {{ ucfirst(request()->segment(1))  }}</li>
    <li class="fa fa-dashboard {{ Request::is('painel') ? 'hidden' : '' }}"> {{ ucfirst(request()->segment(2))  }}</li>
    <li class="fa fa-dashboard {{ Request::is('painel') ? 'hidden' : '' }}"> {{ ucfirst(request()->segment(3))  }}</li>
  </ol> 
</section>
