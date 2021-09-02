@extends('layouts.layouts')
@section('title','| Crear Orden de compra')
@section('content')
<h1>Creacion de orden</h1>
<form method="POST" action="">
    @csrf
    <label>Rut:</label>
    <input type="text" name="rut"><br>

    <label >Razon Social</label><br>
    <label >Direccion</label><br>
    <label >Contacto</label><br>
    {{ date('Y-m-d') }} <br>
    
    <label></label>
    <button>Crear detalle</button>
    
</form>
@endsection
