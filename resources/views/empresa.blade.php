@extends('layouts.layouts')

@section('title','| Empresa')

@section('content')
<div class="container">
    <h1>Empresa</h1>
    <a class="btn btn-outline-secondary" role="button" data-bs-toggle="button"" href="{{ route('company.create')}}">Crear</a>
    @include('layouts.mensajesStatus')

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Rut</th>
                <th scope="col">Razon Social</th>   
                <th scope="col">Direccion</th>     
                <th scope="col">Telefono</th>     
                <th scope="col">Fax</th> 
                <th scope="col">Region</th>   
                <th scope="col">Comuna</th>                 
            </tr>
        </thead>
        @foreach ($companyGet as $companyGetitem)
        <tbody>
            <tr>
                <td scope="row">{{$companyGetitem->rut}}</td>
                <td scope="row">{{$companyGetitem->razonSocial}}</td>            
            </tr>  
        </tbody>  
        @endforeach
    </table>
</div>
@endsection