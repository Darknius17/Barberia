<!DOCTYPE html>
<html>

<head>
    @include ('general.header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>MrChavez - Iniciar</title>
    <!-- Favicon -->
    <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('/css/argon.css?v=1.0.0') }}" rel="stylesheet">
</head>

<body>
    <div class="main-content">

        <div class="header py-6 py-lg-7">
            <div class="container">
                <div class="header-body text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-black">Formulario de Registro</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page content -->
        @yield('content')
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{asset('js/argon.js?v=1.0.0') }}"></script>

</body>

@include('general.footer')

</html>
