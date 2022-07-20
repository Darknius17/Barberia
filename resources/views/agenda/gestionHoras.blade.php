<!doctype html>

@include('admin.headeradmin')

<html>


    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>


 <body class="" >
        <div class="container w-25 p-3 justify-content-center" >
         
        <table class=" table  table-hover table-sm table-bordered border-dark  mt-5 mb-5 text-center " height="200px">
            
            <thead>
              <tr>
               
                <th scope="col"  class="fs-2" >Administracion</th>

              </tr>
            </thead>
            <tbody>
              <tr>
              
                <td class="fs-2"  > <a href="{{route('agenda.index')}}" class="text-decoration-none text-black text-rese">  Gestionar Horas </a> </td>

              </tr>
              <tr>
               
                <td class="fs-2"> <a href="{{ url('/') }}" class="text-decoration-none text-black text-rese"> Gestionar Clientes </a> </td>

              </tr>
              <tr>
                
                <td class="fs-2"> <a href="{{ url('/productos') }}" class="text-decoration-none text-black text-rese"> Gestionar Productos </a> </td>
              

              </tr>
            </tbody>
          </table>

          <table class="container">

            <div>  </div>
            <div>  </div>
            <div>  </div>
            <div>  </div>
            <div>  </div>
            <div>  </div>




          </table>

          


        </div>  
    </div> 


    </body>




@include('general.footer')

</html>
