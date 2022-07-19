
@include('general.header')

@extends('layouts.app')

@section('content')

<div class="container">



    <div id="agenda"> CALENDARIO</div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#evento">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="">
                     @csrf
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>

                      <div class="form-group">
                        <label for="start">Start</label>
                        <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>

                      <div class="form-group">
                        <label for="End">End</label>
                        <input type="text" class="form-control" name="End" id="End" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>




                    <div class="form-group">
                      <label for="nombreCliente">Nombre Cliente</label>
                      <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>


                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="escribe el titulo del evento">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="rut">Rut</label>
                        <input type="text" class="form-control" name="rut" id="rut" aria-describedby="helpId" placeholder="escribe el titulo del evento">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>

                      <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="escribe el titulo del evento">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>


                      <div class="form-group">
                        <label for="dia">Dia</label>
                        <input type="date" class="form-control" name="dia" id="dia" aria-describedby="helpId" placeholder="escribe el titulo del evento">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>

                      <div class="mb-3">
                        <label for="hora" class="form-group">Hora</label>
                        <select type="number" class="form-control" id="hora" placeholder="  " name="hora" value="{{old('hora')}}">
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

                          @foreach ($servicios as $servicio)
                          <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>

                          @endforeach

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




@endsection
