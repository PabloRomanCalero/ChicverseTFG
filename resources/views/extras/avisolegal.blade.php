<link rel="stylesheet" href="{{asset('css/extras/avisolegal.css')}}">

@extends('layouts.layout')

@section('content')
    <section class="section-aviso">
        <h1>Aviso Legal</h1>
        <article class="article-aviso">
            <h2>1. Titularidad de la Plataforma</h2>
            <p>
                El presente sitio web, <strong>Chicverse</strong>, es propiedad de <strong>Chicverse S.L.</strong>, con los siguientes datos identificativos:
            </p>
            <ul>
                <li><strong>Razón Social:</strong> Chicverse S.L.</li>
                <li><strong>CIF:</strong> 12020778N</li>
                <li><strong>Domicilio Social:</strong> Plaza Cortes Valencianas 4-20</li>
                <li><strong>Correo Electrónico de Contacto:</strong> <a href="mailto:infochicverse@gmail.com">infochicverse@gmail.com</a></li>
                <li><strong>Teléfono de Contacto:</strong> 672682326</li>
            </ul>
            
            <h2>2. Uso del Sitio Web</h2>
            <p>
                El acceso y uso de este sitio web están sujetos a los Términos y Condiciones de Uso establecidos en esta página. 
                Al utilizar la plataforma, el usuario acepta cumplir con estas condiciones. Chicverse se reserva el derecho de 
                modificar el contenido del sitio, incluyendo el Aviso Legal, en cualquier momento.
            </p>

            <h2>3. Propiedad Intelectual e Industrial</h2>
            <p>
                Todos los contenidos del sitio web (textos, imágenes, diseño, logotipos, código fuente, etc.) están protegidos 
                por derechos de propiedad intelectual e industrial y pertenecen a Chicverse S.L. o a sus licenciatarios. Queda 
                prohibida la reproducción, distribución o comunicación pública sin el consentimiento expreso de Chicverse S.L.
            </p>

            <h2>4. Responsabilidad de los Contenidos</h2>
            <p>
                Chicverse no se responsabiliza por el uso indebido que los usuarios puedan realizar del contenido publicado en 
                la plataforma ni por los daños derivados de problemas técnicos ajenos a nuestra gestión.
            </p>

            <h2>5. Protección de Datos</h2>
            <p>
                Chicverse cumple con el Reglamento General de Protección de Datos (RGPD) y la normativa vigente en materia de 
                protección de datos. Para más información sobre cómo gestionamos tus datos personales, consulta nuestra 
                <a href="{{route('politicas')}}">Política de Privacidad</a>.
            </p>

            <h2>6. Legislación y Jurisdicción Aplicable</h2>
            <p>
                El presente Aviso Legal se rige por la legislación española. Cualquier disputa será resuelta en los juzgados y 
                tribunales del domicilio del consumidor, siempre que esté dentro del territorio nacional.
            </p>
        </article>
    </section>
@endsection