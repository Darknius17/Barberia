

@include('admin.headeradmin')
<body>

  <form action="{{route('tienda.actualizar', $productos)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="container">
        <h2>Editar Producto</h2>
<div class="container-sm mt-5 mb-5 text-justify ">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Nombre</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="nombre" value="{{old('nombre',$productos->nombre)}}" >
    @error('nombre')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Precio</label>
    <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="precio" value="{{old('precio', $productos->precio) }}">

    @error('precio')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Detalles</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="detalles" value="{{old('detalles',$productos->detalles )}}">

    @error('detalles')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Stock</label>
    <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="stock" value="{{old('stock', $productos->stock )}}">
    @error('stock')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class= "mb-3">
    <label for="formFile" class="form-label col-2">Imagen Producto</label>
    <input class="form-group" type="file" id="formFile" name="imagen">

    @error('imagen')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-labe col-2">Puntuacion</label>
    <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="puntuacion" value="{{old('puntuacion', $productos->puntuacion) }}" >

    @error('puntuacion')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>

  <a href="{{route('tienda.productos')}}" class="btn btn-primary btn-lg">VOLVER</a>
  <button type="submit" class="btn btn-primary btn-lg" name="">ACTUALIZAR</button>

    </div>
</div>

</form>

</div>
</body>


@include('general.footer')
