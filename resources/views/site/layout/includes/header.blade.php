<div class="m-3 mt-5">


    @if (isset($search))
        
    <div class="card-header bg-dark border-0">
        <span class="new-itens text-light text-muted">Melhores resultados para : {{ $search }}</span>
    </div>

    @else

    <div class="card-header bg-dark border-0">
            <span class="new-itens text-light text-muted">{{ $title or ''}}</span>
    </div>
    
    <nav class="breadcrumb bg-white border-0 ml-2 mt-3">
        
        <span class="breadcrumb-item text-dark">{{ $page or '' }}</span>
            @if (isset($brand))
                <span class="breadcrumb-item text-dark">{{ $category }}</span>
                <span class="breadcrumb-item active">{{ $brand }}</span>
            @else
                <span class="breadcrumb-item active">{{ $category  }}</span>
            @endif
        </nav>
    @endif
    <hr>
</div>
