@extends('site.layout.master') @section('content')

<div class="container pt-5 pl-3 pr-3 pb-3">
    <div class="alert alert-danger">
        <h1 class="text-danger"> {{ $message }} <i class="fa fa-exclamation-circle" aria-hidden="true"></i></h1>
    </div>
    <a href="{{ route('site.index') }}" class="btn btn-danger btn-lg">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
</div>

@endsection