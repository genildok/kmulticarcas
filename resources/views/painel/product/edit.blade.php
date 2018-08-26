@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => ['painel.product.update','id' => $product->id,'id_feature' => $feature->id],'method' => 'POST','files' => true]) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{-- {!! Form::label('name','Nome') !!} --}}
                {!! Form::hidden('name',$product->name,['class' => 'form-control','placeholder' => 'Digite o nome do produto']) !!}
                @if ($errors->has('name'))
                    <strong class="text-danger">{{   $errors->first('name')   }}</strong>
                @endif
            </div>
        
            <div class="form-group">
                {!! Form::label('supplier','Fornecedor') !!}
                {!! Form::select('supplier',$suppliers,$product->supplier_id,['class' => 'form-control']) !!}
                @if ($errors->has('supplier'))
                    <strong class="text-danger">{{   $errors->first('supplier')   }}</strong>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('quantity','Quantidade/Estoque') !!}
                {!! Form::text('quantity',$feature->quantity_item,['class' => 'form-control','placeholder' => 'Estoque','style' => 'width:100px']) !!}
                @if ($errors->has('quantity'))
                    <strong class="text-danger">{{   $errors->first('quantity')   }}</strong>
                @endif
            </div>
                {!! Form::label('color','Cores') !!}
           <div class="form-group" data-toggle="buttons">
               @foreach ($color as $colors)
                {!! Form::customEditColor($colors,$feature) !!}
               @endforeach
               @if ($errors->has('color'))
                    <strong class="text-danger">{{   $errors->first('color')   }}</strong>
                @endif
           </div>     
           {!! Form::label('size','Tamanhos',['class' => 'form-check-label']) !!}
           <div class="form-group" data-toggle="buttons">
                @foreach ($sizes as $size)
                {!! Form::customEditSize($size,$feature) !!}
                @endforeach
                @if ($errors->has('size'))
                    <strong class="text-danger">{{   $errors->first('size')   }}</strong>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('price','Preço') !!}
                {!! Form::text('price',$product->price,['class' => 'form-control','placeholder' => 'Preço','style' => 'width:100px']) !!}
                @if ($errors->has('price'))
                    <strong class="text-danger">{{   $errors->first('price')   }}</strong>
                @endif
            </div>           
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('description','Descrição') !!}
                {!! Form::textarea('description',$product->description,['class' => 'form-control','placeholder' => 'Digite uma descrição']) !!}
                @if ($errors->has('description'))
                    <strong class="text-danger">{{   $errors->first('description')   }}</strong>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('brand','Marca') !!}
                {!! Form::select('brand',$brands,$product->brand_id,['class'=>'form-control','placeholder'=>'Selecione']) !!}
                @if ($errors->has('brand'))
                    <strong class="text-danger">{{   $errors->first('brand')   }}</strong>
                @endif
            </div>
         
            <div class="form-group margin-bottom">
                {!! Form::label('image','Foto:') !!}
                {!! Form::file('image',['class' => 'form-control','placeholder' => 'Digite a quantidade em estoque']) !!}
            </div> 
    
            <div class="form-group">
                {!! Form::checkbox('sales',true,$product->sales,['class' => 'flat-blue']) !!}
                {!! Form::label('sales','Colocar em promoção') !!}
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
