@inject('brands', 'App\Http\Controllers\Site\SiteController')


@foreach ($brands->getModel() as $brand )
   
        @if (sizeof($brand->products) > 0)
            <a class="dropdown-item" href="{{ route('product.brand',['q' => $brand->id ]) }}">{{ $brand->brand }}</a>
        @endif    
    
@endforeach