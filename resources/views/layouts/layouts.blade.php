<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Inicio</a></li>
       
        <li><a href="{{ route('vendors.index') }}">Proveedores</a></li>
        <li><a href="{{ route('quotation.index') }}">Orden de compra</a></li>
        <li><a href="#">Configuracion</a>
            <ul>
                <li><a href="#">Usuarios</a></li>
            </ul>
        </li>
    </ul>
    @yield('content')
    @yield('js')
</body>
</html>