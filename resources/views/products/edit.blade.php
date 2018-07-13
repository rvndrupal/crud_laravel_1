@extends('layout')

@section('content')

    <div class="col-sm-8">
        <h2>
            
            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado de Productos</a>
        </h2>
        
        @include('products.fragment.error')
        
        {!! Form::model($pro , ['route' => ['products.update', $pro->id], 'method' => 'PUT']) !!} 
        
             @include('products.fragment.form')

        {!! Form::close() !!}
    
       


    </div>

    <div class="col-sm-4">
            @include('products.fragment.aside')
    </div>

@endsection
