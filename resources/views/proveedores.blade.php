@extends('layouts.layouts')

@section('title','| Proveedores')

@section('content')
    <h1>Proveedores</h1>
        <a href="{{ route('vendors.create')}}">Crear</a>
    <table>
        <tr>
            <th>Rut</th>
            <th>Razon Social</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Comuna</th>
            <th>Region</th>
            <th>Contacto</th>
            <th>Celular</th>
            {{-- <th>Activo</th>
            <th>Editar</th>
            <th>Eliminar</th> --}}
        </tr>
        @foreach ($vendors as $vendorsitem)
        <tr>
            <td>{{$vendorsitem->rut}}</td>
            <td>{{$vendorsitem->razonSocial}}</td>
            <td>{{$vendorsitem->direccion}}</td>
            <td>{{$vendorsitem->telefono}}</td>
            <td>{{$vendorsitem->comuna}}</td>
            <td>{{$vendorsitem->ciudad}}</td>
            <td>{{$vendorsitem->contacto}}</td>
            <td>{{$vendorsitem->celular}}</td>
            <td><a href="{{ route('vendors.edit', $vendorsitem) }}"><img src="/img/bxs-edit.svg" title="Editar" alt="editar"></a></td>
            <td>
                <form method="POST" action="{{ route('vendors.destroy', $vendorsitem) }}">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
            </td>
        </tr>    
        @endforeach
    </table>
@endsection