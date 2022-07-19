

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
        
 
 
     
      
     <div class=" text-center " > <h1> GESTIONAR HORAS</h1>
  
     </div>
 

 
  
 <div class="container p-5">

  <div class="position-relative">
    <form class="d-md-flex" role="search" class="position-absolute top-0 end-0 translate-middle w-25 p-3">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="filtro" value="{{$filtro}}">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form> 
  </div>

 
 
   <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
     <a href="{{route('agenda.crear')}}" class="btn btn-primary me-md-2" type="button">Nueva Hora</a>
   </div>
   <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
    <a href="{{route('servicio.index')}}" class="btn btn-primary me-md-2" type="button">Ajustes de Servicios</a>
  </div>
   
 <div class="border  p-3"  >
 <table class="table">
     
     <thead>
       <tr>
         <th scope="col">Editar</th>
         <th scope="col">Eliminar</th>
         <th scope="col">Nombre Cliente</th>
         <th scope="col">Email</th>
         <th scope="col">Rut</th>
         <th scope="col">Telefono</th>
         <th scope="col">Dia</th>
         <th scope="col">Hora</th>
         <th scope="col">Comentario</th>
         <th scope="col">Servicio</th>
       </tr>
     </thead>
    
         
    
     <tbody>
      @foreach ($agenda as $agendas)
    

     
       <tr>
         <th scope="row"><a href="{{route('agenda.editar', $agendas )}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square "
          style="font-size: 1.5rem; color: white;"></i></a>   </th> 
      <th>     <form action="{{route('agenda.eliminar', $agendas )}}" method="POST">
               @csrf @method('delete')
                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash "
                  style="font-size: 1.5rem; color: white;"></i></button>
              </form>
            </th> 

                <td>{{$agendas->nombreCliente}}</td>
                <td>{{$agendas->email}}</td>
                <td>{{$agendas->rut}}</td>
                <td>{{$agendas->telefono}}</td>
                <td>{{$agendas->dia}}</td>
                <td>{{$agendas->hora}}</td>
                <td>{{$agendas->comentario}}</td>
                <td>{{$agendas->id_servicio}}</td>
         
     @endforeach
 
    

       </tr>
 
     

 
       
     </tbody>
   </table>
 </div>

 {{$agenda->links('pagination::bootstrap-4')}}
 <a href="{{ url('/horas') }}"><button type="button" class="btn btn-primary btn-lg mt-5">VOLVER</button> </a>
 
 </div>
 
 </div>
 
 </body>
 
 @include('general.footer')