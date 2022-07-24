

@include('admin.headeradmin')
<body>

  <form action="{{route('agendar.actualizar', $agenda)}}" method="POST">
    @csrf
    @method('put')
    <div class="container">
        <h2>Editar Hora</h2>
      <div class="container-sm mt-5 mb-5 text-justify ">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label col-2">Nombre Cliente</label>
            <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="nombreCliente" value="{{Auth::user()->name}}">
            @error('nombreCliente')
            <div class="alert alert-danger" role="alert">
              *{{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label col-2">Email</label>
            <input type="email" class="form-group" id="exampleFormControlInput1" placeholder="" name="email" value="{{Auth::user()->telefono}}">
            @error('email')
            <div class="alert alert-danger" role="alert">
              *{{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label col-2">Rut</label>
            <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="rut" value="{{old('rut', $agenda->rut)}}">
            @error('rut')
            <div class="alert alert-danger" role="alert">
              *{{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label col-2">Telefono</label>
            <input type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="telefono" value="{{old('telefono', $agenda->telefono)}}">
            @error('telefono')
            <div class="alert alert-danger" role="alert">
              *{{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label col-2">Dia</label>
            <input type="date" min="2022-07-11" class="form-group" id="exampleFormControlInput1" placeholder="" name="dia" value="{{old('dia', $agenda->dia)}}">

            @error('dia')
            <div class="alert alert-danger" role="alert">
              *{{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label col-2">Hora</label>
            <select type="number" class="form-group" id="exampleFormControlInput1" placeholder="  " required name="hora" value="{{old('hora', $agenda->hora)}}">
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


          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label col-2">Comentario</label>
            <input type="text" class="form-group" id="exampleFormControlInput1" placeholder="" name="comentario" value="{{old('comentario', $agenda->comentario)}}">
            @error('comentario')
            <div class="alert alert-danger" role="alert">
              *{{$message}}
            </div>
            @enderror
          </div>


          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label col-2">Servicio</label>
            <select type="number" class="form-group" id="exampleFormControlInput1" placeholder="" name="id_servicio" value="{{old('id_servicio', $agenda->id_servicio)}}" required>
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

          <a href="{{route('reserva.index')}}" class="btn btn-primary btn-lg">VOLVER</a>
          <button type="submit" class="btn btn-primary btn-lg" name="">ACTUALIZAR</button>

            </div>
        </div>

        </form>

        </div>
        </body>


@include('general.footer')
