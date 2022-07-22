<!doctype html>
<html>
<head>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Full Calendar -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>

</head>
<header>

    <div class="container-fluid">
    <div class="row bg-black">
    <div class="col col-3 mt-3 mb-3 d-flex  "><a class="navbar-brand" href="{{ url('/index') }}"><img src="{!! asset('images/logo-blanco-1024x268.png') !!}" width="450px" height="100px" class = ""  ></a></div>

    <div class="col text-center mt-5 mb-3"><a href="{{ url('/aprende') }}" class="navbar-brand text-white" >Aprende mas</a></div>
    <div class="col text-center mt-5 mb-3"><a href="{{ url('/salon') }}"  class="navbar-brand text-white">Salón</a></div>
    <div class="col text-center mt-5 mb-3"><a href="{{url('/contacto')}}" class="navbar-brand text-white" >Contactenos</a></div>
    <div class="col text-center mt-5 mb-3"><a href="{{route('agenda.cliente')}}" class="navbar-brand text-white">Reservar Hora</a></div>
    <div class="col text-center mt-5 mb-3"><a href="{{ url('/tienda') }}" class="navbar-brand text-white">Productos</a></div>

    <div class="col text-end mt-5 mb-3 " hidden><a href="#"></a><img src="{!! asset('images/Car.png') !!}" width="35px" height="30px"  ></div>
    <div class="col text-center mt-5 mb-3"> <a href="{{ url('/horas') }}"><img src="{!! asset('images/Person.png') !!}" width="30px" height="30px"></a></div>

    </div>
    </div>

    </header>

</html>
