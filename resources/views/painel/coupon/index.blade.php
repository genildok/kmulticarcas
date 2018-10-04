@extends('layouts.master')

@section('content')
  
      <div class="box-body no-padding">
        <table class="table table-striped text-center">
          <tr>
            {{-- <th style="width: 10px">#</th> --}}
            <th>Cupom</th>
            <th>Descrição</th>
            {{-- <th>Resgate</th> --}}
            <th>Status</th>
            <th colspan="2">Ação</th>
          </tr>
          @forelse ($coupons as $coupon)
            <tr>  
              <td>{{ $coupon->coupon }}</td>
              <td>{{  $coupon->description  }}</td>
              {{-- <td>{{  $coupon->Status  }}</td> --}}
      
              @if ($coupon->status == 0)
                <td>
                  <form class="form-inline" action="{{ route('painel.coupon.active',['id' => $coupon->id]) }}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="btn btn-link">
                          <i class="fa fa-exclamation-triangle fa-2x text-yellow"></i>
                      </button>
                  </form>
                  </td>
              @else
                <td>
                  <span>
                    <i class="fa fa-check-circle-o fa-2x text-green" aria-hidden="true"></i>
                  </span>
                </td>
              @endif
              <td>
                  <span>
                  <a href="{{ route('painel.coupon.show',['id' => $coupon->id ]) }}">
                        <i class="fa fa-pencil fa-2x text-primary"></i>
                    </a>
                  </span>
                </td>
            </tr>
            @empty
            <tr>
              <td colspan="5">
                  <div class="callout callout-danger">
                    <p><i class="fa fa-check-circle"></i>{{ ' Nenhum cupom gerado ainda. ' }}</p>
                  </div>
              </td>
            </tr>
            @endforelse
            {{-- {{ $coupons->links() }} --}}
        </table>
      </div>
@endsection