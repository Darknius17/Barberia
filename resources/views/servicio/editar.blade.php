

@include('admin.headeradmin')
<body>

  <form action="{{route('servicio.actualizar', $servicios) }}" method="POST">
    @csrf
    @method('put')
    <div class="container">

<h2>Editar Servicio</h2>
<div class="container-sm mt-5 mb-5 text-justify ">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Nombre</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="nombreServicio" value="{{old('nombreServicio', $servicios->nombre )}}">
    @error('nombreServicio')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Descripcion</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="descripcionServicio"  value="{{old('descripcionServicio', $servicios->descripcion )}}">
    @error('descripcionServicio')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Valor</label>
    <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="valor"  value="{{old('valor', $servicios->valor )}}">
    @error('valor')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>

  <a href="{{route('agenda.index')}}" class="btn btn-primary btn-lg">VOLVER</a>
  <button type="submit" class="btn btn-primary btn-lg" name="">ACTUALIZAR</button>

    </div>
</div>

</form>

</div>
</body>


@include('general.footer')
