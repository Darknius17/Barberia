<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Full Calendar -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>

</head>

  <nav class="navbar bg-black pt-4 pb-4" >
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="#" ></a>
      <a class="navbar-brand" href="{{ url('/index') }}"><img src="{!! asset('images/logo-blanco-1024x268.png') !!}" width="90%" height="80px" class = ""  ></a>
      <a class="navbar-brand text-white"  href="{{ url('/aprende') }}">Aprende más</a>
      <a class="navbar-brand text-white" href="{{ url('/salon') }}">Salón</a>
      <a class="navbar-brand text-white" href="{{url('/contacto')}}">Contactenos</a>
      <a class="navbar-brand text-white" href="{{route('reserva.index')}}">Reservar Hora</a>
      <a class="navbar-brand text-white" href="{{ url('/tienda') }}">Productos</a>
      <a class="navbar-brand text-white" href="#" ></a>
      <a class="navbar-brand text-white" href="#" ></a>
      <a class="navbar-brand" href="{{url('/carro')}}" hidden><img src="{!! asset('images/Car.png') !!}" width="30px" height="30px" class = "row"  ></a>
      <a class="navbar-brand" href="{{ url('/horas') }}"><img src="{!! asset('images/Person.png') !!}" width="30px" height="30px" class = "row"  ></a>
      <a class="navbar-brand text-white" href="#" >


        


         </a>


    </div>


  </nav>




</html>
