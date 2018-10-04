@extends('layouts.master')

@section('content')


    {!! Form::open(['route' => 'painel.coupon.store','method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                {!! Form::label('product-id','Produto') !!}
                {!! Form::text('product_id',$id,['class' => 'form-control text-center text-green text-bold','style' => 'width:5rem','readonly']) !!}
                @if ($errors->has('product_id'))
                <strong class="text-danger">{{   $errors->first('product_id')   }}</strong>
            @endif
            </div>
            <div class="form-group">
                {!! Form::label('coupon','Cupom') !!}
                {!! Form::text('coupon',$coupon,['class' => 'form-control text-center text-green text-bold','style' => 'width:15rem','readonly']) !!}
                @if ($errors->has('coupon'))
                    <strong class="text-danger">{{   $errors->first('coupon')   }}</strong>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('description','Descrição') !!}
                {!! Form::textarea('description',null,['class' => 'form-control','rows'=>4,'cols'=>45,'style'=>'resize:none','placeholder'=>'Ex: Cupom de desconto,camisa Nike azul']) !!}
                @if ($errors->has('description'))
                    <strong class="text-danger">{{   $errors->first('description')   }}</strong>
                @endif
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('expiration_date','Data de Validade') !!}
                {!! Form::date('expiration_date',null,['class' => 'form-control d-block']) !!}
                @if ($errors->has('expiration_date'))
                    <strong class="text-danger">{{   $errors->first('expiration_date')   }}</strong>
                @endif
            </div>
            
            {!! Form::label('limit','Limite de Venda') !!}
            <div class="form-group">
                {!! Form::select('limit',['' => 'Selecione',
                                          '5' => '5 vendas',
                                          '10' => '10 vendas',
                                          '15' => '15 vendas',
                                          '20' => '20 vendas',
                                          '30' => '30 vendas'],0,['class' => 'form-control']) !!}
                @if ($errors->has('limit'))
                    <strong class="text-danger">{{   $errors->first('limit')   }}</strong>
                @endif
            </div>
        </div> <!-- /col-md-6 -->
        <div class="col-md-2">
            {!! Form::label('discount','Desconto %') !!}
            <div class="form-group">
                {!! Form::select('discount',['' => 'Selecione',
                                          '0.02' => '2%',
                                          '0.03' => '3%',
                                          '0.05' => '5%',
                                          '0.10' => '10%',
                                          ],0,['class' => 'form-control']) !!}
                @if ($errors->has('limit'))
                    <strong class="text-danger">{{   $errors->first('limit')   }}</strong>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            {!! Form::submit('Salvar',['class'=> 'btn btn-lg btn-primary pull-right']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection