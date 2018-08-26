@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => 'painel.brand.post','method' => 'POST','class' => 'form-inline ']) !!}
    {!! Form::label('name','Nome da marca') !!}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::text('brandName',null,['class' => 'form-control','placeholder' => 'Digite a marca']) !!}
            </div>
            {!! Form::submit('Salvar',['class'=> 'btn  btn-primary']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if ($errors->has('brandName'))
                <strong class="text-danger">{{ $errors->first('brandName') }}</strong>
            @endif
            @if (session()->get('error'))
                <strong class="text-danger">{{ session()->get('error') }}</strong>
            @endif
           
        </div>
    </div>         
    {!! Form::close() !!}
@endsection