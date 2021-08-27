@extends('layouts.layouts')

@section('title','| Crear Proveedores')

@section('content')
    <h1>Crear nuevos proveedores</h1>
    <form method="POST" action="{{ route('vendors.store')}}">
        @csrf
        <label>Rut</label>
            <input type="text" name="rut" placeholder="11111111-2" value="{{ old('rut')}}"><br>
            {!! $errors->first('rut','<small>:message</small><br>') !!}
        <label>Razon Social</label>
            <input type="text" name="razonSocial" value="{{ old('razonSocial')}}"><br>
            {!! $errors->first('razonSocial','<small>:message</small><br>') !!}
        <label>Direccion</label>
            <input type="text" name="direccion" value="{{ old('direccion')}}"><br>
            {!! $errors->first('direccion','<small>:message</small><br>') !!}
        <label>Telefono</label>
            <input type="text" name="telefono" value="{{ old('telefono')}}"><br>
            {!! $errors->first('telefono','<small>:message</small><br>') !!}
        <label>Region</label>
            <select name="ciudad" value="{{ old('ciudad')}}">
                @foreach ($regiones as $regionesitem)
                    <option value="{{ $regionesitem['nombre']}}">{{ $regionesitem['nombre']}}</option>
                @endforeach
            </select><br>
            {!! $errors->first('ciudad','<small>:message</small><br>') !!}
        <label>Comuna</label>
            <select name="comuna" value="{{ old('comuna')}}">
                @foreach ($comunas as $comunasitem)
                    <option value="{{ $comunasitem['nombre']}}">{{ $comunasitem['nombre']}}</option>
                @endforeach
            </select><br>
            {!! $errors->first('comuna','<small>:message</small><br>') !!}
        <label>Contacto</label>    
            <input type="text" name="contacto" value="{{ old('contacto')}}"><br>
            {!! $errors->first('contacto','<small>:message</small><br>') !!}
        <label>Email</label>
            <input type="mail" name="email" placeholder="contacto@mail.com" value="{{ old('email')}}"><br>
            {!! $errors->first('email','<small>:message</small><br>') !!}
        <label>Celular</label>
            <input type="text" name="celular" value="{{ old('celular')}}"><br>
            {!! $errors->first('celular','<small>:message</small><br>') !!}
        <button>Crear</button>
    </form>

@endsection