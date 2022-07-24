

@include('admin.headeradmin')
<body>

  <form action="{{route('users.actualizar', $users) }}" method="POST">
    @csrf
    @method('put')
    <div class="container">


<div class="container-sm mt-5 mb-5 text-justify ">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre Usuario</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="name" value="{{old('name', $users->name )}}">
    @error('name')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-group" id="exampleFormControlInput1" placeholder="" name="email"  value="{{old('email', $users->email )}}">
    @error('email')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rut</label>
        <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="rut"  value="{{old('rut', $users->rut )}}">
        @error('password')
        <div class="alert alert-danger" role="alert">
          *{{$message}}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">telefono</label>
        <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="telefono"  value="{{old('password', $users->telefono )}}">
        @error('password')
        <div class="alert alert-danger" role="alert">
          *{{$message}}
        </div>
        @enderror
      </div>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1"  class="form-label">Contraseña</label>
    <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="password"  value="{{old('password', $users->password )}}">
    @error('password')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Admin</label>
    <input type="number" class="form-group" min="0" max="1" id="exampleFormControlInput1" placeholder="" name="is_admin"  value="{{old('is_admin', $users->is_admin )}}">
    @error('password')
    <div class="alert alert-danger" role="alert">
      *{{$message}}
    </div>
    @enderror
  </div>


  <a href="{{route('users.index')}}" class="btn btn-primary btn-lg">VOLVER</a>
  <button type="submit" class="btn btn-primary btn-lg" name="">ACTUALIZAR</button>

    </div>
</div>

</form>

</div>
</body>


@include('general.footer')
