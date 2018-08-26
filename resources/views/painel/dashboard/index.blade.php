@extends('layouts.master')

@section('content')
    {{--  <div class="box-header">
        <h3 class="box-title">Estoque da sua loja</h3>
      </div>  --}}
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table table-striped text-center">
          <tr>
            <th style="width: 10px">#</th>
            <th>Produto</th>
            <th>Fornecedor</th>
            <th>Oferta</th>
            <th>Tamanho</th>
            <th style="width: 40px">Estoque</th>
          </tr>
          @forelse ($products as $product)
            <tr>  
              <td>{{ $product->id }}.</td>
              <td>{{  $product->name  }}</td>
              <td>{{  $product->sup_name  }}</td>

              @if ($product->sales)
                <td><span class="badge bg-green">Sim</span></span></td>
              @else
                <td><span class="badge bg-red"> Não</span></td>
              @endif

                <td>{{ $product->size }}</td>
      
              @if ($product->quantity_item <= 2)
                <td><span class="badge bg-red">{{ $product->quantity_item }}</span></td>
              @else
                <td><span class="badge bg-yellow">{{ $product->quantity_item }}</span></td>
              @endif
            </tr>
            @empty
            <tr>
              <td colspan="5">
                  <div class="callout callout-danger">
                    <p><i class="fa fa-check-circle"></i>{{ ' O status do seu estoque é vazio. ' }}</p>
                  </div>
              </td>
            </tr>
            @endforelse
            {{ $products->links() }}
{{-- 
          
          <tr>
            <td>2.</td>
            <td>Clean database</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
              </div>
            </td>
            <td><span class="badge bg-yellow">70%</span></td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Cron job running</td>
            <td>
              <div class="progress progress-xs progress-striped active">
                <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
              </div>
            </td>
            <td><span class="badge bg-light-blue">30%</span></td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Fix and squish bugs</td>
            <td>
              <div class="progress progress-xs progress-striped active">
                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
              </div>
            </td>
            <td><span class="badge bg-green">90%</span></td>
          </tr> --}}
        </table>
      </div>
@endsection