@extends('layouts.layouts')

@section('title','| Editar Empresa')

@section('content')
    <h1>Editar Empresa</h1>
    <form method="POST" action="{{ route('company.update', $companyGetitem) }}">
        @csrf @method('PATCH')
        <label>Rut</label>
            <input type="text" name="rut" value="{{ $companyGetitem->rut }}"><br>
            {!! $errors->first('rut','<small>:message</small><br>') !!}
        <label>Razon Social</label>
            <input type="text" name="razonSocial" value="{{ $companyGetitem->razonSocial }}"><br>
            {!! $errors->first('razonSocial','<small>:message</small><br>') !!}
        <label>Direccion</label>
            <input type="text" name="direccion" value="{{ $companyGetitem->direccion }}"><br>
            {!! $errors->first('direccion','<small>:message</small><br>') !!}
        <label>Telefono</label>
            <input type="text" name="telefono" value="{{ $companyGetitem->telefono }}"><br>
            {!! $errors->first('telefono','<small>:message</small><br>') !!}
        <label>Fax</label>
            <input type="text" name="fax" value="{{ $companyGetitem->fax }}"><br>
            {!! $errors->first('fax','<small>:message</small><br>') !!}
        <label>Region</label>
            <select name="region" value="{{ old('region') }}">
                @foreach ($regiones as $regionesitem)
                    <option value="{{ $regionesitem['nombre']}}">{{ $regionesitem['nombre']}}</option>
                @endforeach
            </select><br>
            {!! $errors->first('region','<small>:message</small><br>') !!}
        <label>Comuna</label>
            <select name="comuna" value="{{ old('comuna') }}">
                @foreach ($comunas as $comunasitem)
                    <option value="{{ $comunasitem['nombre']}}">{{ $comunasitem['nombre']}}</option>
                @endforeach
            </select><br>
            {!! $errors->first('comuna','<small>:message</small><br>') !!}
        <button>Actualizar</button>
    </form>

@endsection