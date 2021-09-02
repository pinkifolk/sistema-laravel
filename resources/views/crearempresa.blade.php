@extends('layouts.layouts')

@section('title','| Crear Empresa')

@section('content')
    <h1>Crear Empresa</h1>
    <form method="POST" action="{{ route('company.store') }}">
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
        <label>Fax</label>
            <input type="text" name="fax" value="{{ old('fax')}}"><br>
            {!! $errors->first('fax','<small>:message</small><br>') !!}
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
        <button>Crear</button>
    </form>

@endsection