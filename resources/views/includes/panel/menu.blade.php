<!-- Navigation -->
<h6 class="navbar-heading text-muted">Adminisitración</h6>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="../index.html">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../examples/icons.html">
            <i class="ni ni-calendar-grid-58 text-orange"></i> Horas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../examples/maps.html">
            <i class="ni ni-single-02 text-red "></i> Clientes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/productos') }}">
            <i class="ni ni-app text-yellow"></i> Productos
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="ni ni-key-25 text-info"></i> Cerrar Sesión
        </a>
        <form method="POST" action="{{ route('logout') }}" style="display: none;" id="formLogout">
            @csrf

        </form>
    </li>
</ul>



<!-- CODIGO QUE NO SE UTILIZARÁ -->

<!-- Divider <hr class="my-3"> -->

<!-- Heading <h6 class="navbar-heading text-muted">Documentation</h6> -->

<!-- Navigation
    <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
            <i class="ni ni-spaceship"></i> Getting started
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
            <i class="ni ni-palette"></i> Foundation
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
            <i class="ni ni-ui-04"></i> Components
        </a>
    </li>
    </ul>
-->
