
    @include('general.header')


    <!doctype html>
<html>
<div class="">
<a class="">

<img src="{!! asset('images\fondo.png') !!}" class="bg-img" width="100%" height="100%">

</a>

<div class=" container" >

    <h2 class="text-center mt-5 text-decoration-underline">RESERVAR UNA CITA</h2>
    <p Class="text-center fs-2">  Nos enorgullece ofrecer un servicio de alta calidad comenzando con reservas de citas. Nuestro sistema en linea le
        permite elegir un estilista y el horario que le convenga y si no puede asistir puede re programar dentro
        de 24 horas posterior a su cita. </p>

        <div class="d-grid gap-2 col-2 mx-auto mt-3 mb-5">
            <a href="{{route('agenda.cliente')}}" class="btn btn-warning" >     RESERVAR AHORA  </a>
        </div>



</div>



<div class="card bg-dark text-white">
    <img src="{!! asset('images\StylingPowder.png') !!}" class="card-img" alt="...">
    <div class="card-img-overlay position-absolute top-50 start-50 translate-middle">
      <h2 class="card-title text-center container ">STYLING POWDER 150</h2>
      <p class="card-text text-center fs-3 mt-5">¡Te Invitamos a probar nuestro exclusivo producto! 100% Natural y Orgánico!
        Si buscas realzar el styling y darle una mayor atracción visual a tu cabello, este es tu producto.</p>

        <div class="d-grid gap-2 col-2 mx-auto mt-3 mb-5">
            <a href="{{route('tienda.index')}}" class="btn btn-warning"> VER PRODUCTOS </a>
            </div>
    </div>
  </div>

  <div  class="container">

    <div class="table container">
      <div class="row">
      <div class="col">
      </div>
      <div class="col text-center mt-5" > <img src="{!! asset('images\Icono1.png') !!}" class="" alt="..." width="100px" height="100px"  ></div>
      <div class="col" ></div>
    </div>
    </div>

    <div class="row">
    <div class="col"></div>
    <div class="col2"><p class="card-text text-center fs-3 mt-5 mb-5">  Enfocarnos en calidad sobre la cantidad es una característica que nos representa dentro de la compañía MR.CHAVEZ.  Es muy importante para nosotros que la calidad trascienda en toda la empresa de tal manera que día a día se brinde una prestigiosa atención hacia ustedes. </p></div>
    <div class="col"></div>
    </div>
    <div class="row mb-5">
      <div class="col"></div>
      <div class="col text-center"><img src="{!! asset('images\miguel.png') !!}" class="" alt="..." width="132px" height="163px"  ></div>
      <div class="col"></div>
      </div>





  </div>


</div>



</html>

@include('general.footer')
