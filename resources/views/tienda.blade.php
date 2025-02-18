<script type="text/javascript" src="{!! asset('js/tienda/tienda.js') !!}" defer></script>
<link rel="stylesheet" href="{{asset('css/tienda.css')}}">

@extends('layouts.layout')

@section('content')
    @csrf
    <div class="navbarProducts">
        <div class="sexDiv">
            <div id="sex-hombre" class="selected">Hombre</div>
            <div id="sex-mujer">Mujer</div>
        </div>
        <div class="listaCategory">
            <ul>
                <li class="selected">Zapatillas</li>
                <li>Camisetas</li>
                <li>Polos</li>
                <li>Vaqueros</li>
                <li>Pantalones</li>
                <li>Chaquetas</li>
            </ul>
        </div>
        <div class="containerBuscador">
            <input type="text" id="buscador" name="buscador" placeholder="Buscar prenda" required>
            <div class="resultadosDiv" id="resultadosDiv"></div>
            <i class="fa fa-search"></i>
        </div>
    </div>
    <div class="main-container"> 
        <div id="product-container"></div>
        <div id="snackbar"></div>
    </div>
    
@endsection