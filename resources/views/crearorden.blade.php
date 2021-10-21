@extends('layouts.layouts')
@section('title','| Crear Orden de compra')
@section('content')
<h1>Creacion de orden</h1>
{{-- <form action="#" method="POST">
    <select name="">
        <option value="0">Selecionar RUT</option>
        @foreach ( $getRut as $getRutItem )
            <option value="{{ $getRutItem->rut }}">{{ $getRutItem->rut }}</option>
        @endforeach
    </select><br>
    <label>Condicion de pago</label>
    <input type="text" name="condicion">
</form> --}}
<br>
<div id="app" class="d-flex flex-column justify-content-center h-25">
    <div>
        <label>Codigo</label>
            <input type="text" v-model="codigo">
        <label>Descripcion</label>
            <input type="text" v-model="descripcion">
        <label>Cantidad</label>
            <input type="number" v-model="cantidad">
        <label>Precio</label>
            <input type="number" v-model="precioU">
        <button class="btn btn-success" @click="agregarItems">+</button>
    </div>
    <h2>Detalle del total</h2>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Codigo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Total</th>
                <th scope="col">Eliminar Item</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(all, index) in allItems">
                <th scope="row" v-text="index"></th>
                <th v-text="all.codigo"></th>
                <td v-text="all.descripcion"></td>
                <td v-text="all.cantidad"></td>
                <td v-text="all.precioU"></td>
                <td v-text="all.total =all.cantidad*all.precioU"></td>
                <td><button style="background:none;color:inherit;border:none;padding:0;font:inherit;cursor:pointer;outline:inherit;" @click="eliminarItem"><img src="/img/bx-x-circle.svg" title="Eliminar" alt="Eliminar"></button></td>
            </tr>            
            </tbody>
        </table>
    </div>
    <div class="d-md-flex flex-md-column justify-content-md-center align-items-md-end">
        <p class="pr-5">Total: @{{ totalParcial }}</p>
        <p class="pr-5">Iva: @{{ totalIva }}</p>
        <p class="pr-5">Total Pagar: @{{ totalPagar }}</p>
        <button class="btn btn-outline-success">Crear</button>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="/js/ordencompra.js"></script>
@endsection
