@extends('layout')

@section('content')

    <div class="col-sm-8">
        <h2>Listado de Productos
        <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>

    @include('products.fragment.info')

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th width="20px">ID</th>
                <th>Nombre del Producto</th>
                <th colspan="3">&nbsp;</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($pro as $p )
                <tr>
                    <th>{{ $p->id }}</th>
                    <th><strong>{{ $p->name }}</strong>
                        {{ $p->short }}
                    
                    </th>
                    <th>
                        <a href="{{ route('products.show', $p->id) }}" class="btn btn-default">Ver</a>
                    </th>
                    <th>
                        <a href="{{ route('products.edit', $p->id) }}" class="btn btn-success">Editar</a>
                    </th>
                    <th>
                        <form action="{{ route('products.destroy', $p->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">Borrar</button>
                        </form>

                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
        
    {!! $pro->render() !!}


    </div>

    <div class="col-sm-4">
            @include('products.fragment.aside')
    </div>

@endsection