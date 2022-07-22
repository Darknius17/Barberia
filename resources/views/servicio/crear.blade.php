

@include('admin.headeradmin')
<body>

  <form action="{{route('servicio.store')}}" method="POST">
    @csrf
    <div class="container">
            <div> <h2>Agregar Servicio</h2></div>
<div class="container-sm mt-5 mb-5 text-justify ">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Nombre</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="nombreServicio" value="{{old('nombreServicio')}}">
    @error('nombreServicio')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Descripcion</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="descripcionServicio" value="{{old('descripcionServicio')}}">
    @error('descripcionServicio')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Valor</label>
    <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="valor" value="{{old('valor')}}">
    @error('valor')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>

  <a href="{{route('agenda.index')}}" class="btn btn-primary btn-lg">VOLVER</a>
  <button type="submit" class="btn btn-primary btn-lg" name="">AGREGAR</button>

    </div>
</div>

</form>

</div>
</body>


@include('general.footer')
