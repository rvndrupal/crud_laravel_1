@extends('layout')

@section('content')

    <div class="col-sm-8">
        <h2>
            {{ $pro->name }}
            <a href="{{ route('products.edit', $pro->id) }}" class="btn btn-default pull-right">Editar</a>
        </h2>
        <p>
            {{  $pro->short }}
        </p>
        <hr>
        <br>
        {!! $pro->body !!}
    


    </div>

    <div class="col-sm-4">
            @include('products.fragment.aside')
    </div>

@endsection

