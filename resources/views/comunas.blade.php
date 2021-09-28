@extends('layouts.layouts')

@section('title','| Comunas')

@section('content')
<div class="container">
    <h1>Comunas</h1>

    <a class="btn btn-outline-secondary" role="button" data-bs-toggle="button"" href="{{ route('commune.store')}}">Actualizar</a>

    @include('layouts.mensajesStatus')

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>           
            </tr>
        </thead>
        @foreach ($comunasGet as $comunasGetitem)
        <tbody>
            <tr>          
                <td scope="row">{{$comunasGetitem->nombre}}</td>            
            </tr>  
        </tbody>  
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {{ $comunasGet->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection