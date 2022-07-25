
@include('general.header')

@extends('layouts.app')

@section('content')

<div class="container">


    <div class="container-fluid">
<div class="col">  <a  href="{{route('reserva.crear')}}" class=" btn btn-success btn-lg"> RESERVAR HORA</a>
    <a  href="{{route('reserva.index')}}" class=" btn btn-primary btn-lg">  VOLVER</a> </div>

</div>


    <div id="agenda"> </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#evento" hidden>
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">HORAS RESERVA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" id="formulariomodal">
                     @csrf
                    {!! csrf_field() !!}

                    <div class="form-group" hidden>
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>


                    <div class="form-group" hidden>
                        <label for="title">Nombre cliente</label>
                        <input type="text" class="form-control" name="title" id="title" value="Hora Reservada" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>



                      </div>

                      <div class="form-group">
                        <label for="start">Fecha reserva iniciada</label>
                        <input type="datetime-local" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="" value=""  >
                        <small id="helpId" class="form-text text-muted">Seleccione la Hora y dia de Reserva</small>
                      </div>

                      <div class="form-group">
                        <label for="end">Fecha reserva terminada</label>
                        <input type="datetime-local" class="form-control" step="600" name="end" id="end" aria-describedby="helpId" placeholder=""  >
                        <small id="helpId" class="form-text text-muted"></small>
                      </div>




                    <div class="form-group">
                      <label for="nombreCliente">Nombre Cliente</label>
                      <input type="text" class="form-control" name="nombreCliente" id="nombreCliente"  aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Ingrese su nombre</small>
                    </div>


                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Ingrese su email</small>
                    </div>
                    <div class="form-group">
                        <label for="rut">Rut</label>
                        <input type="text" class="form-control" name="rut" id="rut" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Ingrese su rut</small>
                      </div>

                      <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Ingrese su telefono</small>
                      </div>


                      <div class="form-group" hidden >
                        <label for="dia" >Dia</label>
                        <input type="text" class="form-control" name="dia" id="dia" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>

                      <div class="mb-3" hidden>
                        <label for="hora" class="form-group"   >Hora</label>
                        <select type="number" class="form-control" id="hora" placeholder="  " name="hora" value="{{old('hora')}}" >
                          <option> 11:00 </option>
                          <option> 12:00 </option>
                          <option> 13:00 </option>
                          <option> 14:00 </option>
                          <option> 15:00 </option>
                          <option> 16:00 </option>
                          <option> 17:00 </option>
                          <option> 18:00 </option>
                          <option> 19:00 </option>
                          <option> 20:00 </option>
                          <option> 21:00 </option>
                        </select>
                        @error('hora')
                        <div class="alert alert-danger" role="alert">
                          *{{$message}}
                        </div>
                        @enderror
                      </div>


                    <div class="form-group">
                      <label for="comentario">Comentario</label>
                      <textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="id_servicio" class="form-label">Servicio</label>
                        <select type="number" class="form-group" id="id_servicio" placeholder="" name="id_servicio" value="{{old('id_servicio')}}" required>
                          <option value="" >Selecciona una categoria</option>



                        </select>
                        @error('id_servicio')
                        <div class="alert alert-danger" role="alert">
                          *{{$message}}
                        </div>
                        @enderror
                      </div>


                    </form>



            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>


                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

            </div>
        </div>
    </div>
</div>








   </div>


@endsection
