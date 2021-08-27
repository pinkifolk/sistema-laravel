@extends('layouts.layouts')
@section('title','| Crear Orden de compra')
@section('content')
<h1>Creacion de orden</h1>
<form method="POST" action="">
    @csrf
    <label>Rut:</label>
    <input type="text" name="rut">

    <label >Razon Social</label>
    <label >Direccion</label>
    <label >Contacto</label>
    
    <label></label>
</form>
@endsection
