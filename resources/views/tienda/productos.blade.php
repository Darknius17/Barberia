<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


</head>

@include('admin.headeradmin')

<body class="">


    <div class="p-5 m-5 ">





        <div class=" text-center ">
            <h1> GESTIONAR PRODUCTOS</h1>

        </div>





        <div class="container p-5">

            <div class="position-relative">
                <form class="d-md-flex" role="search" class="position-absolute top-0 end-0 translate-middle w-25 p-3">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"
                        name="filtro" value="{{ $filtro }}">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
                <a href="{{ route('tienda.crear') }}" class="btn btn-primary me-md-2" type="button">Nuevo Poducto</a>
            </div>

            <div class="border  p-3">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Detalles</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Puntuacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <th scope="row">
                                    <a href="{{ route('tienda.editar', $producto) }}"
                                        class="btn btn-warning btn-sm  "><i class="bi bi-pencil-square "
                                            style="font-size: 1.5rem; color: white;"></i></a>
                                </th>

                                <th>
                                    <form action="{{ route('tienda.eliminar', $producto) }}" name=""
                                        id="elim" class="eliminar" method="POST">
                                        @csrf @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm  " id="elim">
                                            <i class="bi bi-trash "
                                                style="font-size: 1.5rem; color: white;"></i></button>


                                    </form>
                                </th>


                                <td> {{ $producto->nombre }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->detalles }}</td>
                                <td>{{ $producto->stock }}</td>
                                <td>{{ $producto->imagen }}</td>
                                <td>{{ $producto->puntuacion }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            {{ $productos->links('pagination::bootstrap-4') }}
            <a href="{{ url('/horas') }}"><button type="button" class="btn btn-primary btn-lg mt-5">VOLVER</button>
            </a>

        </div>

    </div>

</body>



@include('general.footer')


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

<script> 
    $('#elim').submit(function(e) {
        e.preventDefault();
    


       Swal.fire({
            title: '¿Estas seguro de eliminar lo seleccionado?',
            text: "No podras revertirlo luego de aceptar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Elimininalo!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
               if (result.isConfirmed) {
                this.submit()
        }

        })
    }); 


    </script>


        
      
@if( session('eliminar') == 'eliminado')

<script>
 
 Swal.fire(
                      'Eliminado!',
                      'El Producto a sido eliminado',
                      'success'
 )
</script>
    
@endif

    

