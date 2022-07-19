<!doctype html>



<html>
<head>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>


<body class="" >



    @include('general.header')

    <div class="container mt-5 ">
        <div class="row ">

            <div class="col-12 ">
                <h2 class="page-header text-center">Nuestros Productos</h2>
            </div>
            <div class="container  text-dark text-center gris ">
                <div class="row justify-content-between  ">
                    <div class="col-2 text-end mt-2 ">Ordenar por </div>
                    <div class="col-2  "> <select class=" form-select col-3  text-dark ">
                            <option selected class="gris">Orden por defecto</option>
                            <option value="1" class="gris" >Ordenar de mayor a menor precio</option>
                            <option value="2"class="gris" >Ordenar de menor a mayor precio </option>
                        </select></div>
                    <div class="col-6 gris" ></div>
                    <div class="col mt-1 text-end ">Mostar</div>
                    <div class="col"> <select class="form-select  text-dark "
                            aria-label="Default select example">
                            <option selected>3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                        </select></div>

                </div>

            </div>

        </div>
    </div>

    <div class="container mt-5 mb-5  ">
      <div class="row row-cols-md-5 g-4">
@foreach ($productos as $producto)
    

  
            <div class="col">
              <div class="card h-100 text-dark " >
                
               <a href="{{route('tienda.show', $producto)}}"> <img src="{{ asset($producto->imagen)}}" class="card-img-top gris " > </a>
                <div class="card-body gris">
                  <h5 class="card-title text-center">{{$producto->nombre}}</h5>
                  <p class="card-text text-center">${{$producto->precio}}</p>
                  <p class="card-text text-center">{{$producto->puntuacion}} Estrellas</p>
                <div class="text-center">  <button type="button" class="btn btn-warning ">Agregar al Carro</button> </div>
                </div>

              </div>
            </div>
           

    @endforeach  

  </div> 
  <div class="mt-3"> {{$productos->links('pagination::bootstrap-4')}}   </div>
</div>


            {{-- <div class="col">
                <div class="card h-100 gris text-dark">
                  <img src="{!! asset('images/rociador.png') !!}" class="card-img-top gris " alt="...">
                  <div class="card-body gris ">
                    <h5 class="card-title text-center">Rociador </h5>
                    <p class="card-text text-center">$10.990</p>
                    <p class="card-text text-center">aqui van las estrellas</p>
                  <div class="text-center">  <button type="button" class="btn btn-outline-dark ">Agregar al Carro</button> </div>
                  </div>
  
                </div>
              </div>

              <div class="col">
                <div class="card h-100 bg-secondary text-dark">
                  <img src="{!! asset('images/promocion.png') !!}" class="card-img-top gris " alt="...">
                  <div class="card-body gris">
                    <h5 class="card-title text-center">Styling Powder 150 + Rociador</h5>
                    <p class="card-text text-center">$25.000</p>
                    <p class="card-text text-center">aqui van las estrellas</p>
                  <div class="text-center">  <button type="button" class="btn btn-outline-dark ">Agregar al Carro</button> </div>
                  </div>
  
                </div>
              </div>
               --}}
            




            




         






</body>
<div class="position-absolute bottom-0 start-0 col-12">

  
</div>






@include('general.footer')
</html>
