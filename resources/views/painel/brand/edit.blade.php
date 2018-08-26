@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => 'painel.supplier.update','method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::hidden('id', $supplier->id,['class' => 'form-control']) !!}
                {!! Form::label('name','Nome') !!}
                {!! Form::text('name', $supplier->name,['class' => 'form-control','placeholder' => 'Nome']) !!}
                @if ($errors->has('name'))
                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::text('email', $supplier->email,['class' => 'form-control','placeholder' => 'Email']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('phone','Telefone') !!}
                {!! Form::text('phone', $supplier->phone,['class' => 'form-control','placeholder' => 'Telefone','style' => 'width:200px']) !!}
                @if ($errors->has('phone'))
                    <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                @endif
           </div>   
           <div class="form-group">
                {!! Form::label('street','Rua') !!}
                {!! Form::text('street', $supplier->address->street,['class' => 'form-control','placeholder' => 'Rua']) !!}
            </div> 
            <div class="form-group">
                {!! Form::label('district','Bairro') !!}
                {!! Form::text('district', $supplier->address->district,['class' => 'form-control','placeholder' => 'Bairro']) !!}
        </div>
                
        </div>
        <div class="col-md-6">
          
            <div class="form-group">
                    {!! Form::label('number','Número') !!}
                    {!! Form::text('number', $supplier->address->number,['class' => 'form-control','placeholder' => 'Número','style' => 'width:200px']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('city','Cidade') !!}
                {!! Form::text('city', $supplier->address->city,['class' => 'form-control','placeholder' => 'Cidade']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('state','Estado') !!}
                {!! Form::text('state', $supplier->address->state,['class' => 'form-control','placeholder' => 'Estado']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('zip_code','CEP') !!}
                {!! Form::text('zip_code', $supplier->address->zip_code,['class' => 'form-control','placeholder' => 'CEP','style' => 'width:200px']) !!}
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