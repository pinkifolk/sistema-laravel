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
    @forelse ( $getData as $getDataItem)
        <label>Rut:</label> {{  $getDataItem->rut }}<br>
        <label>Razon Social:</label> {{  $getDataItem->razonSocial }}<br>
        <label>Direccion:</label> {{  $getDataItem->direccion }}<br>
        <label>Contacto:</label> {{  $getDataItem->contacto }}<br>
        <label>Fecha:</label> {{ date('Y-m-d') }} <br>
    @empty
        <p>No existe</p>
    @endforelse
@endif
 
    

@endsection
