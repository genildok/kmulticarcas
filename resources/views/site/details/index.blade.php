@extends('site.layout.master') @section('content')

<div class="container mt-5">
    <div class="row mt-3">
        <div class="col-12 col-md-6">
            <div class="row row-content">

                <div class="content-img">

                    <div class="col-12 col-md-12">
                        <div class="">
                            <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" alt="" class="img-responsive">
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
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

        <div class="col-md-6">
            <div class="container">
                <div class="form-group header">
                    <h2 class="text-dark">Camisa Pólo - Reserva original</h2>
                </div>
                <div class="form-group mt-4 price">
                    <span class="text-dark">Preço a Vista</span>
                    <br>
                    <h2 class="text-danger text-price">R$ 65,00</h2>
                </div>

                <div class="card p-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="lead">
                                        <label for="color" class="text-secondary">Cores</label>
                                    </div>
                                    <div class="form-group">
                                        <select name="color" id="color" class="form-control color">
                                            <option value="1">Azul</option>
                                            <option value="1">Amarelo</option>
                                            <option value="1">Preto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="lead">
                                        <label for="quntity" class="text-secondary">Quantidade</label>
                                    </div>
                                    <div class="btn-group">
                                        <input type="number" value="1" name="quantity" class="form-control quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="lead">
                                    <label for="quntity" class="text-secondary">Tamanhos</label>
                                </div>
                                <div class="btn-group" data-toggle="buttons">
                                    <label for="" class="btn btn-primary" active>P
                                        <input type="checkbox" name="size" id="size1" autocomplete="off" checked>
                                    </label>
                                    <label for="" class="btn btn-primary ml-3" active>M
                                        <input type="checkbox" name="size" id="size1" autocomplete="off">
                                    </label>
                                    <label for="" class="btn btn-primary ml-3" active>G
                                        <input type="checkbox" name="size" id="size1" autocomplete="off">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <hr class="my-3">
                        <div class="form-group">
                            <form action="{{ URL('/cart/add') }}" method="post">
                                <div class="btn-group">
                                    <button class="btn btn-warning" type="submit">
                                        <i class="fa fa-shopping-cart"></i> Colocar no carrinho</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection