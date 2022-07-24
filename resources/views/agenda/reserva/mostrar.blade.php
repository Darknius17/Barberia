@include('general.header')

@extends('layouts.app')






@section('content')

<section>

    <h1 class="text-center">Bienvenido {{ Auth::user()->name }} </h1>





</section>



<div class="container">


    <h2 class="text-center"> Horas Reservadas</h2>


<div class="border  p-3"  >
    <table class="table">

        <thead>
          <tr>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Servicio</th>
            <th scope="col">Dia</th>
            <th scope="col">Hora</th>
            <th scope="col">Comentario</th>
            <th  scope="col">id_agenda</th>



          </tr>
        </thead>



        <tbody>

         @foreach ($reserva as $reservas)



          <tr>
            <th scope="row"><a href="{{route('agendar.editar',$reservas->id_agenda)}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square "
             style="font-size: 1.5rem; color: white;"></i></a>   </th>
         <th>     <form action="{{ route('agendar.eliminar', $reservas->id_agenda) }}" method="POST">
                  @csrf @method('delete')
                   <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash "
                     style="font-size: 1.5rem; color: white;"></i></button>
                 </form>
               </th>

                   <td>{{$reservas->nombreU}}</td>
                   <td>{{$reservas->nombreS}}</td>
                   <td>{{$reservas->dia}}</td>
                   <td>{{$reservas->hora}}</td>
                   <td>{{$reservas->comentario}}</td>
                   <td >{{$reservas->id_agenda}}</td>




        @endforeach
        <a  href="{{route('reserva.crear')}}" class=" btn btn-primary btn-lg"> RESERVAR HORA</a>
        <br>
        <br>
        <a  href="{{url('/reserva/calendario')}}" class=" btn btn-primary btn-lg"> VER HORAS RESERVADAS</a>

    </div>

</table>

 {{$reserva->links('pagination::bootstrap-4')}}






        @endsection

