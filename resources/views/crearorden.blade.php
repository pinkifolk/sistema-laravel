@extends('layouts.layouts')
@section('title','| Crear Orden de compra')
@section('content')
<h1>Creacion de orden</h1>
<form method="POST" action="{{ route('quotation.search') }}">
    @csrf
    <label>Rut:</label>
    <input type="text" name="rut">
    <button>Buscar</button>
</form>

@if(isset($getData))
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Rut</th>
                <th scope="col">Razon Social</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Contacto</th>
                <th scope="col">Email</th>
                <th scope="col">Crear OC</th>
            </tr>
        </thead>
    
        @forelse ( $getData as $getDataItem)
        <tbody>
            <tr>
                <td scope="row">{{$getDataItem->rut}}</td>
                <td scope="row">{{$getDataItem->razonSocial}}</td>
                <td scope="row">{{$getDataItem->direccion}}</td>
                <td scope="row">{{$getDataItem->celular}}</td>
                <td scope="row">{{$getDataItem->contacto}}</td>
                <td scope="row">{{$getDataItem->email}}</td>
                <td scope="row"><a href="#"><img src="/img/bx-play.svg" title="Editar" alt="editar"></a></td>            
            </tr>  
        </tbody>  
    @empty
        <p>No existe</p>
    @endforelse
@endif
 
    

@endsection
