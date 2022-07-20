<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<header>
   
    <div class="container-fluid">
    <div class="row bg-black">
    <div class="col mt-3 mb-3 text-center"><a class="navbar-brand" href="{{ url('/index') }}"><img src="{!! asset('images/logo-blanco-1024x268.png') !!}" width="450px" height="100px" class = ""  ></a></div>
    <div class="col text-white text-center mt-5 mb-5" > <h1> Administracion </h1></div>  
    <div class="col"></div>      
    
    </div>     
    </div>

    </header>

</html>



