

@include('admin.headeradmin')
<body>

    <div class="row">
  <form action="{{route('users.store')}}" method="POST">
    @csrf

    <div class="container border ">



<div class="container-sm mt-5 mb-5 text-justify ">

        <h5 class=" ">AGREGAR USUARIO</h5>
        <br>
<div class="mb-3 position">
    <label for="exampleFormControlInput1" class="form-label col-2 ">Nombre Usuario</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="name" value="{{old('name')}}">
    @error('name')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Email</label>
    <input type="email" class="form-group" id="exampleFormControlInput1" placeholder="" name="email" value="{{old('email')}}">
    @error('email')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label col-2">Contraseña</label>
    <input type="text"  class="form-group" id="exampleFormControlInput1" placeholder="" name="password" value="{{old('password')}}">
    @error('password')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>

  <a href="{{route('users.index')}}" class="btn btn-primary btn-lg">VOLVER</a>
  <button type="submit" class="btn btn-primary btn-lg" name="">AGREGAR</button>







    </div>
</div>

</form>
    </div>
</div>


</body>


@include('general.footer')


