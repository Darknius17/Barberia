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





     <div class=" text-center " > <h1> GESTION DE USUARIOS</h1>

     </div>



 <div class="container p-5">


    <div class="position-relative">
        <form class="d-md-flex" role="search" class="position-absolute top-0 end-0 translate-middle w-25 p-3">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="filtro" value="{{$filtro}}">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>


    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{route('users.crear')}}" class="btn btn-primary me-md-2" type="button">Nuevo Usuario </a>
      </div>


 <div class="border  p-3"  >
 <table class="table">

     <thead>
       <tr>
         <th scope="col">Editar</th>
         <th scope="col">Eliminar</th>
         <th scope="col"> Nombre Usuario</th>
         <th scope="col">Email</th>
         <th scope="col">Rut</th>
         <th scope="col">Telefono</th>
         <th scope="col">Password</th>
         <th scope="col">Tipo usuario</th>

       </tr>
     </thead>



     <tbody>

        @foreach ($user as $users)



       <tr>
         <th scope="row"><a href="{{route('users.editar',$users)}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square "
          style="font-size: 1.5rem; color: white;"></i></a> </th>

         <th> <form action="{{route('users.eliminar', $users )}}" id="" method="POST">
               @csrf @method('delete')
                <button type="submit" class="btn btn-danger btn-sm" id="" > <i class="bi bi-trash "
                  style="font-size: 1.5rem; color: white;"></i></button>


                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->rut}}</td>
                <td>{{$users->telefono}}</td>
                <td>{{$users->password}}</td>
                <td>{{$users->is_admin}}</td>

     </form>
    </th>
     @endforeach



       </tr>





     </tbody>
   </table>
 </div>

 {{$user->links('pagination::bootstrap-4')}}
 <a href="{{ url('/horas') }}"><button type="button" class="btn btn-primary btn-lg mt-5">VOLVER</button> </a>

 </div>

 </div>

 </body>

 @include('general.footer')



