@extends('site.layout.master')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header bg-light p-0 m-0">
                <h2 class="text-dark m-4">Camisa Polo - Reserva Original</h2>
            </div>
        <div class="row mt-3">
            <div class="col-12 col-md-3">
                <div class="row">

                    <div class="col-12">
                        <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" width="100%" alt="" class="img-responsive">
                    </div>

                    <div class="col-12 mb-3 mt-2">
                        <ul class="list-inline">
                            <li class="list-inline-item d-inline">
                                <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" width="20%" alt="" class="img-thumbnail">
                            </li>
                            <li class="list-inline-item d-inline">
                                <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" width="20%" alt="" class="img-thumbnail">
                            </li>
                            <li class="list-inline-item d-inline">
                                <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" width="20%" alt="" class="img-thumbnail">
                            </li>
                         </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header pl-2 pt-2 pb-0 bg-light">
                <h4>Produtos relacionados</h4>
            </div>
        </div>

    </div>


    <!-- <div class="row" style="border:1px solid #000;width:100px;">
       <div class="col-md-5 col-12">
         <div class="row" style="border:1px solid #000;width:100px;">
             <div class="col-md-10 col-12" style="background: #fff;height:400px;border:1px solid #000">
                <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" width="200" alt="" class="img-responsive">
             </div>
             <div class="col-md-2 col-12 m-0 p-0" style="background: #ff3;height:400px;">
                <img src="{{ asset('assets/site/img/product-img/01.jpg') }}"  alt="" class="img-thumbnail">
             </div>
         </div>

       </div>
    </div> -->
@endsection
