
<div class="carousel-inner" role="listbox">

    <div class="carousel-item bg-white active">

        <div class="row">

            <div class="content-similar">
               
                @foreach ($brands as $product)

                    <div class="similar">
                            <div class="card">
                                <div class="content-similar-img">
                                <img src="{{ asset('assets/painel/img/'.$product->image) }}" class="d-block img-thumbnail" alt="{{ $product->name }}">
                                </div>
                                <div class="card-footer footer-similar   m-0 p-0">
                                    <div class="card-title similar-title">
                                        <span class="text-secondary">{{ $product->name }}</span>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group-lg">
                                        <a href="{{ route('product.show',[ 'id' => $product->id ]) }}" class="btn-block bg-dark text-details">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Detalhes</a>
                                    </div>
                                </div>
                            </div>
                    </div><!-- /content-similar -->
                @endforeach
              
             </div><!-- /row -->
        </div><!--/row /carousel-item -->
    </div>
</div>

<a role="button" data-slide="prev" href="#similar-img" class="carousel-control-prev">
    <span class="carousel-control-prev-icon  bg-dark"></span>
</a>
<a href="#similar-img" role="button" data-slide="next" class="carousel-control-next">
    <span class="carousel-control-next-icon bg-dark"></span>
</a>