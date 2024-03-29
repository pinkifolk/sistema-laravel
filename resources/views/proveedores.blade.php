@extends('layouts.layouts')

@section('title','| Proveedores') 
@section('content')
<div class="container-fluid">
    <h1>Proveedores</h1>
        <a class="btn btn-outline-secondary" role="button" data-bs-toggle="button"" href="{{ route('vendors.create')}}">Crear</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Rut</th>
                <th scope="col">Razon Social</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Comuna</th>
                <th scope="col">Region</th>
                <th scope="col">Contacto</th>
                <th scope="col">Email</th>
                <th scope="col">Celular</th>
            </tr>
        </thead>
        @foreach ($vendors as $vendorsitem)
        <tbody>
            <tr>
                <td scope="row">{{$vendorsitem->rut}}</td>
                <td scope="row">{{$vendorsitem->razonSocial}}</td>
                <td scope="row">{{$vendorsitem->direccion}}</td>
                <td scope="row">{{$vendorsitem->telefono}}</td>
                <td scope="row">{{$vendorsitem->comuna}}</td>
                <td scope="row">{{$vendorsitem->ciudad}}</td>
                <td scope="row">{{$vendorsitem->contacto}}</td>
                <td scope="row">{{$vendorsitem->email}}</td>
                <td scope="row">{{$vendorsitem->celular}}</td>
                <td scope="row"><a href="{{ route('vendors.edit', $vendorsitem) }}"><img src="/img/bxs-edit.svg" title="Editar" alt="editar"></a></td>
                <td scope="row">
                    <form id="destroy-item" method="POST" action="{{ route('vendors.destroy', $vendorsitem) }}">
                        @csrf @method('DELETE')     
                        <button style="background:none;color:inherit;border:none;padding:0;font:inherit;cursor:pointer;outline:inherit;"><img src="/img/bx-x-circle.svg" title="Eliminar" alt="Eliminar"></button>                                  
                    </form>
                </td>
                <td></td>
            </tr>  
        </tbody>  
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {!! $vendors->links('pagination::bootstrap-4') !!}
    </div>
</div>  
@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        $("#destroy-item").submit(function(e){
        e.preventDefault();
        Swal.fire({
                title: 'Estas Seguro?',
                text: "Si eliminas este registro no podras crear nuevas Ordenes",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar'
            }).then((result) => {
                if (result.isConfirmed) {            
                    this.submit();
                }
            })
        });

    
</script>
@endsection
