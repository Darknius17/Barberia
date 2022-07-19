

@include('admin.headeradmin')
<body>
 
  <form action="{{route('tienda.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-sm">
      <div class="card-header"> Agregar Producto</div>
<div class="card mt-5 mb-5">
<div class="container-sm mt-5 mb-5 text-justify ">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="nombre" value="{{old('nombre')}}">
    @error('nombre')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Precio</label>
    <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="precio" value="{{old('precio')}}">
    @error('precio')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Detalles</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="detalles" value="{{old('detalles')}}">
    @error('detalles')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Stock</label>
    <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="stock" value="{{old('stock')}}">
    @error('stock')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class= "mb-3">
    <label for="formFile" class="form-label">Imagen Producto</label>
    <input class="form-group" type="file" id="" name="imagen"  accept="image/*" >
    @error('imagen')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Puntuacion</label>
    <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="puntuacion" value="{{old('puntuacion')}}">
    @error('puntuacion')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>

  <a href="{{route('tienda.productos')}}" class="btn btn-primary btn-lg">VOLVER</a>
  <button type="submit" class="btn btn-primary btn-lg" name="">AGREGAR</button>

    </div>
</div>

</form>
</div>
</div>
</body>


@include('general.footer')