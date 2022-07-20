@include('general.header')

@extends('layouts.app')

@section('content')


<div class="container">

    <div id="calendario"></div>
CALENDARIO
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#events">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="events" name="events" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="">

                    <div class="mb-3">
                        <label for="id" class="form-label">ID: </label>
                        <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>

<div class="mb-3">
  <label for="title" class="form-label">Titulo</label>
  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>

<div class="mb-3">
  <label for="descripcion" class="form-label">descripcion</label>
  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
</div>

  <div class="mb-3">
    <label for="start" class="form-label">start</label>
    <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>

  <div class="mb-3">
    <label for="end" class="form-label">end</label>
    <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>







                </form>


        {!! csrf_field() !!}


            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-success" id="btnSave">Guardar</button>
                <button type="button" class="btn btn-warning" id="btnUpdate">Modificar</button>
                <button type="button" class="btn btn-danger" id="btnDelete">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>



@endsection
