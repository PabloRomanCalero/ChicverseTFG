<script type="text/javascript" src="{!! asset('js/cuenta/cuenta.js') !!}" defer></script>
<link rel="stylesheet" href="{{asset('css/auth/cuenta.css')}}">

@extends('layouts.layout')

@section('content')
<section class="section-profile" id="section-profile">
    <div class="profile-info" id="profile-info">
    </div>
    <div class="profile-actions">  
        <div class="dropdownOpcionesDiv">
            <button class="dropdownOpciones botonForm">Acciones</button>
            <ul class="dropdownMenu">
                <li><a href="{{route('formMedia')}}"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png"/>Publicar</a></li> 
                <li>
                    <form id="profilePhotoForm" method="POST" action="{{route('profilePhoto')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <label for="profile_image" class="dropdownButton"><img src="https://static.thenounproject.com/png/4879835-200.png"/>Cambiar foto</label>
                        <input type="file" class="form-control-file" id="profile_image" name="profile_image" placeholder="Cambiar foto" accept=".jpg, .jpeg, .png, .mp4">
                    </form>
                </li>
                <li><a href="{{route('formAddress')}}"><img src="https://cdn-icons-png.flaticon.com/512/106/106129.png"/>Añadir Dirección</a></li>
                <li>
                    <a href="{{route('showOrders')}}"><img src="https://cdn-icons-png.flaticon.com/512/3621/3621282.png"/>Mis Pedidos</a>
                </li>
                <li>
                    <form method="POST" action="{{route('deleteUser')}}" id="deleteUserForm" class="deleteUserForm">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit" class="dropdownButton"><img src="https://cdn-icons-png.flaticon.com/512/58/58326.png"/>Eliminar Cuenta</button>
                    </form>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="deslogearse">
                        @csrf
                        <button type="submit" class="dropdownButton"><img src="https://www.iconpacks.net/icons/2/free-exit-logout-icon-2857-thumb.png"/>Cerrar Sesión</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="media-container" id="media-container"></div>

    <div id="profileModal" class="profileModal hidden">
        <div class="modalContent">
            <h3>Cambiar foto del perfil</h3>
            <div class="modalDiv">
                <form id="profilePhotoForm2" method="POST" action="{{ route('profilePhoto') }}" enctype="multipart/form-data">
                    @csrf
                    <button type="button" id="changePhoto" class="modalButton">Cambiar foto</button>
                    <input type="file" id="profile_image" name="profile_image" accept=".jpg, .jpeg, .png" class="hidden">  
                </form>
                <button type="button" id="deletePhoto" class="modalButton">Eliminar foto actual</button>
                <button type="button" id="cancelModal" class="modalButton">Cancelar</button>
            </div>
        </div>
    </div>
    
</section>
@endsection