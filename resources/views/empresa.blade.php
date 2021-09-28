@extends('layouts.layouts')

@section('title','| Empresa')

@section('content')
<div class="container">
    <h1>Empresa</h1> 
        <a class="btn btn-outline-secondary" role="button" data-bs-toggle="button"" href="{{ route('company.create')}}">Crear</a>
        <p class="text-danger">Solo se puede crear una sola empresa</p>
    @include('layouts.mensajesStatus')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Rut</th>
                <th scope="col">Razon Social</th>   
                <th scope="col">Direccion</th>     
                <th scope="col">Telefono</th>     
                <th scope="col">Fax</th>   
                <th scope="col">Comuna</th>
                <th scope="col">Editar</th>                 
            </tr>
        </thead>
        @foreach ($companyGet as $companyGetitem)
        <tbody>
            <tr>
                <td scope="row">{{$companyGetitem->rut}}</td>
                <td scope="row">{{$companyGetitem->razonSocial}}</td> 
                <td scope="row">{{$companyGetitem->direccion}}</td>
                <td scope="row">{{$companyGetitem->telefono}}</td>
                <td scope="row">{{$companyGetitem->fax}}</td>
                <td scope="row">{{$companyGetitem->comuna}}</td>
                <td scope="row"><a href="{{ route('company.edit',$companyGetitem) }}"><img src="/img/bxs-edit.svg" title="Editar" alt="editar"></a></td>
               
            </tr>  
        </tbody>  
        @endforeach
    </table>
</div>
@endsection