<!-- =========================================================== -->

<!-- Small boxes (Stat box) -->
@if (Request::is('painel'))
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $total_order  }}</h3>

                <p>Pedidos</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="{{ route('painel.order.list') }}" class="small-box-footer">
                Mais  <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
            <div class="inner">
            <h3>{{ $waiting_order}}</h3>

                <p>Pedidos Receber</p>
            </div>
            <div class="icon">
                    {{-- <i class="ion ion-stats-bars"></i> --}}
                    <i class="ion ion-android-stopwatch"></i>
            </div>
            <a href="#" class="small-box-footer">
                Mais <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
            <div class="inner">
            <h3>R$ {{ number_format($total_payment,2,',','.') }}<sup style="font-size: 20px"></sup></h3>

                <p>Caixa</p>
            </div>
            <div class="icon">
                <i class="ion ion-calculator"></i>
            </div>
            <a href="#" class="small-box-footer">
                Mais  <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
        </div>
        <!-- ./col -->
    
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
            <div class="inner">
                <h3>R$ {{ number_format($total_costs,2,',','.') }}</h3>

                <p>Custos</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
                Mais  <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endif
<!-- /.row -->

<!-- =========================================================== -->