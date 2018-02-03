<div class="m-3 mt-5">
    <div class="card-header bg-dark border-0">
        <span class="new-itens text-light">{{ $title }}</span>
    </div>

    <nav class="breadcrumb bg-white border-0 ml-2 mt-3">
    
            <span class="breadcrumb-item text-dark">{{ $page }}</span>
        @if (!isset($brand))
            <span class="breadcrumb-item active">{{ $category }}</span>
        @else
            <span class="breadcrumb-item text-dark">{{ $category }}</span>
            <span class="breadcrumb-item active">{{ $brand }}</span>
        @endif

       

    </nav>
    <hr>
</div>
