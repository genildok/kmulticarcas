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
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="btn-group">
                                            <button class="btn btn-warning btn-block" type="submit">
                                                <i class="fa fa-shopping-cart"></i> Colocar no carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row img -->
    <div class="title-similar">
        <p class="text-secondary">Produtos Relacionados</p>
        <hr class="">
    </div>
    <div class="carousel slide" id="similar-img" data-ride="carousel">
     
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item bg-white active">
                <div class="row">
                    <div class="content-similar">
                        <div class="similar">
                            <div class="card">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="d-block img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar   m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Nike</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->
                        <div class="similar">
                            <div class="card">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Nike</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->
                        <div class="similar">
                            <div class="card">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Nike</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->
                        <div class="similar">
                            <div class="card  d-none d-md-block">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="d-block img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Nike</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->
                        <div class="similar">
                            <div class="card d-none d-md-block">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="d-block img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Nike</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->

                    </div><!-- /content-similar -->
                </div><!-- /row -->

            </div><!-- /carousel-item -->
            <div class="carousel-item bg-white">
                <div class="row">
                    <div class="content-similar">
                        <div class="similar">
                            <div class="card">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="d-block img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Reserva</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->
                        <div class="similar">
                            <div class="card">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Reserva</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->
                        <div class="similar">
                            <div class="card">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Reserva</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->
                        <div class="similar">
                            <div class="card  d-none d-md-block">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="d-block img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Reserva</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->
                        <div class="similar">
                            <div class="card d-none d-md-block">
                                <div class="content-similar-img">
                                    <img src="{{ asset('assets/site/img/product-img/01.jpg') }}" class="d-block img-thumbnail" alt="Primeiro slide">
                                </div>
                                <div class="card-footer footer-similar m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">Reserva</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('site.show',225841) }}" class="btn-block  bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /similar -->

                    </div><!-- /content-similar -->
                </div><!-- /row -->
                

            </div><!-- /carousel-item -->
        </div>

        <a role="button" data-slide="prev" href="#similar-img" class="carousel-control-prev">
            <span class="carousel-control-prev-icon  bg-dark"></span>
        </a>
        <a href="#similar-img" role="button" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon bg-dark"></span>
        </a>
    </div>
</div>
@endsection