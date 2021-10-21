@csrf
      <label for="Nombre">Nombre</label>
      <input type="text" name="Nombre" id="nombre" value="{{old('Nombre',$atleta->Nombre)}}">
      <br>
      <label for="Nombre">Apellido Materno</label>
      <input type="text" name="apellidoPaterno" id="apellidopaterno" value="{{old('apellidoPaterno',$atleta->apellidoPaterno)}}">
      <br>
      <label for="Nombre">Apellido Paterno</label>
      <input type="text" name="apellidoMaterno" id="apellidomaterno" value="{{old('apellidoMaterno',$atleta->apellidoMaterno)}}">
      <br>
      <label for="Nombre">Correo</label>
      <input type="text" name="Correo" id="correo" value="{{old('Correo',$atleta->Correo)}}">
      <br>
      <label for="Nombre">Foto</label>
      @isset($atleta->Foto)
      <img src="{{asset('storage').'/'.$atleta->Foto}}" width="100" alt="">
      @endisset
      <input type="file" name="Foto" id="foto" value="{{old('Foto',$atleta->Foto)}}">
      <br>
      <input type="submit" value="{{$btnText}}">
      <a href="{{route('atletas.index')}}">Regresar</a>
      <br>