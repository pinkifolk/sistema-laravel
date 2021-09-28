@extends('layouts.layouts')

@section('title','| Editar Proveedores')

@section('content')
    <h1>Editar proveedores</h1>
    <form method="POST" action="{{ route('vendors.update',$vendorsitem) }}">
        @csrf @method('PATCH')
        <label>Rut</label>
            <input type="text" name="rut" value="{{ $vendorsitem->rut }}"><br>
            {!! $errors->first('rut','<small>:message</small><br>') !!}
        <label>Razon Social</label>
            <input type="text" name="razonSocial" value="{{ $vendorsitem->razonSocial }}"><br>
            {!! $errors->first('razonSocial','<small>:message</small><br>') !!}
        <label>Direccion</label>
            <input type="text" name="direccion" value="{{ $vendorsitem->direccion }}"><br>
            {!! $errors->first('direccion','<small>:message</small><br>') !!}
        <label>Telefono</label>
            <input type="text" name="telefono" value="{{ $vendorsitem->telefono }}"><br>
            {!! $errors->first('telefono','<small>:message</small><br>') !!}
        <label>Region</label>
            <select name="ciudad" value="{{ old('ciudad') }}">
                @foreach ($regiones as $regionesitem)
                    <option value="{{ $regionesitem['nombre']}}">{{ $regionesitem['nombre']}}</option>
                @endforeach
            </select><br>
            {!! $errors->first('ciudad','<small>:message</small><br>') !!}
        <label>Comuna</label>
            <select name="comuna" value="{{ old('comuna') }}">
                @foreach ($comunas as $comunasitem)
                    <option value="{{ $comunasitem['nombre']}}">{{ $comunasitem['nombre']}}</option>
                @endforeach
            </select><br>
            {!! $errors->first('comuna','<small>:message</small><br>') !!}
            <label>Contacto</label>    
        <input type="text" name="contacto" value="{{ $vendorsitem->contacto}}"><br>
            {!! $errors->first('contacto','<small>:message</small><br>') !!}
        <label>Email</label>
            <input type="mail" name="email" value="{{ $vendorsitem->email }}"><br>
            {!! $errors->first('contacto','<small>:message</small><br>') !!}
        <label>Celular</label>
            <input type="text" name="celular" value="{{ $vendorsitem->celular }}"><br>
            {!! $errors->first('celular','<small>:message</small><br>') !!}
        <button>Actualizar</button>
    </form>

@endsection