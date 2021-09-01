@extends('layouts.layouts')

@section('title','| Proveedores')

@section('content')
<div class="container">
    <h1>Regiones</h1>

    <a class="btn btn-outline-secondary" role="button" data-bs-toggle="button"" href="{{ route('city.store')}}">Actualizar</a>

    @include('layouts.mensajesStatus')

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>           
            </tr>
        </thead>
        @foreach ($regionesGet as $regionesGetitem)
        <tbody>
            <tr>
                <td scope="row">{{$regionesGetitem->codigo}}</td>
                <td scope="row">{{$regionesGetitem->nombre}}</td>            
            </tr>  
        </tbody>  
        @endforeach
    </table>
</div>
@endsection