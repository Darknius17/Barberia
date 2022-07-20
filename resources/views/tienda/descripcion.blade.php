
@include('general.header')



<section>


        <div class="container mt-5 ">



<div class="" style="height: 600px;">
    <div class="card mb-5" style="max-width: 1000px ; height: 450px; ">
        <div class="row g-1">
          <div class="col-md-6  mx-auto">
            <img src="{{ asset($productos->imagen)}}" class="" alt="..." style="max-width: 400px ; height: 400px; ">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title display-5">{{$productos->nombre}}</h5>
              <p class="card-text fs-2">Desciptcion: {{$productos->detalles}}</p>
              <p class="card-text fs-2">Valor: ${{$productos->precio}}</p>
              <p class="card-text fs-2">Stock en tienda: {{$productos->stock}}</p>

              <div class="mt-5"> <a href="{{route('tienda.index')}}" target="_blank" rel="noopener noreferrer"> <button type="button" class="btn btn-primary btn-lg " >VOLVER</button> </a></div>
              <div class="mt-5">  <button type="button" class="btn btn-warning btn-lg " hidden>Agregar al Carro</button> </div>

            </div>
          </div>
        </div>
      </div>



    </div>
</div>

</section>


@include('general.footer')
