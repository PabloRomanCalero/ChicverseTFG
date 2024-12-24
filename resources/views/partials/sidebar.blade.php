<script type="text/javascript" src="{!! asset('js/partials/sidebar.js') !!}" defer></script>
<div class="sidebar">
    <div class="logo">
        <a href="{{route('inicio')}}">CHICVERSE<img src="{{asset('img/sidebar/logo.svg')}}" alt="Logo"></a>
    </div>
    <div class="seccionesFunciones">
        <ul>
            <li><a href="{{route('inicio')}}"><img src="{{asset('img/sidebar/inicio.png')}}" class="imgDesplegable" alt="inicio">Inicio</a></li>
            <li><a href="{{route('cuenta')}}"><img src="{{asset('img/sidebar/usuario.png')}}" class="imgDesplegable" alt="usuario">Perfil</a></li>
            <li><a href="{{route('tienda')}}"><img src="{{asset('img/sidebar/ropa.png')}}" class="imgDesplegable" alt="tienda">Ropa</a></li>
            <li><a href="{{route('carrito')}}"><img src="{{asset('img/sidebar/carrito.png')}}" class="imgDesplegable" alt="carrito"><span id="numCarrito" class="numCarrito">0</span>Carrito</a></li>
        </ul>

    </div>
    <ul>
        <li class="dropdown">
            <a><img src="{{asset('img/sidebar/menuDesplegable.png')}}" class="imgDesplegable" alt="más">Más</a>
            <ul class="submenu">
                <li><a href="{{route('politicas')}}">Política de privacidad</a></li>
                <li><a href="{{route('condiciones')}}">Términos y Condiciones</a></li>
                <li><a href="{{route('aviso-legal')}}">Aviso legal</a></li>
                <li><a href="{{route('contacto')}}">Contacto</a></li>
            </ul>
        </li>
    </ul>
    <p>&copy; 2024 - Todos los derechos reservados por CHICVERSE</p>
</div>

<div class="bottomNavigation">
    <ul>
        <li><a href="{{route('inicio')}}"><img src="{{asset('img/sidebar/inicio.png')}}" alt="Inicio"><span>Inicio</span></a></li>
        <li><a href="{{route('cuenta')}}"><img src="{{asset('img/sidebar/usuario.png')}}" alt="Perfil"><span>Perfil</span></a></li>
        <li><a href="{{route('tienda')}}"><img src="{{asset('img/sidebar/ropa.png')}}" alt="Ropa"><span>Ropa</span></a></li>
        <li class="carritoBottom"><a href="{{route('carrito')}}"><img src="{{asset('img/sidebar/carrito.png')}}" alt="Carrito"><span id="numCarritoBottom">0</span><span>Carrito</span></a></li>
        <li class="dropdown">
            <a><img src="{{asset('img/sidebar/menuDesplegable.png')}}" alt="Más"><span>Más</span></a>
            <ul class="submenu">
                <li><a href="{{route('politicas')}}">Política de privacidad</a></li>
                <li><a href="{{route('condiciones')}}">Términos y Condiciones</a></li>
                <li><a href="{{route('aviso-legal')}}">Aviso legal</a></li>
                <li><a href="{{route('contacto')}}">Contacto</a></li>
            </ul>
        </li>
    </ul>
</div>