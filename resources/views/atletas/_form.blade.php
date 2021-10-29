@csrf
@isset($atleta->Foto)
<div class="flex flex-wrap justify-center">
      <div class="w-6/12 sm:w-4/12 px-4">
        <img src="{{asset('storage').'/'.$atleta->Foto}}" alt="" class="shadow rounded-full max-w-full h-auto align-middle border-none" />
      </div>
    </div>
      {{-- <img src="{{asset('storage').'/'.$atleta->Foto}}" width="100" alt=""> --}}
@endisset
<div>
      <label for="Nombre" class="block py-1">Nombre</label>
      <input type="text" name="Nombre" id="nombre" value="{{old('Nombre',$atleta->Nombre)}}" class="w-full border border-gray-400 rounded focus:border-indigo-400">
</div>

<div>
      <label for="apellidoPaterno" class="block py-1">Apellido Materno</label>
      <input type="text" name="apellidoPaterno" id="apellidopaterno" value="{{old('apellidoPaterno',$atleta->apellidoPaterno)}}" class="w-full border border-gray-400 rounded focus:border-indigo-400">
</div>

<div>
      <label for="apellidoMaterno" class="block py-1">Apellido Paterno</label>
      <input type="text" name="apellidoMaterno" id="apellidomaterno" value="{{old('apellidoMaterno',$atleta->apellidoMaterno)}}" class="w-full border border-gray-400 rounded focus:border-indigo-400">
</div>

<div>
      <label for="Correo" class="block py-1">Correo</label>
      <input type="text" name="Correo" id="correo" value="{{old('Correo',$atleta->Correo)}}" class="w-full border border-gray-400 rounded focus:border-indigo-400">
</div>

<div class="flex w-full">
      <div class="w-1/2">
            <label for="RFID" class="block py-1">RFID</label>
            <input type="text" name="RFID" id="correo" value="{{old('Correo',$atleta->RFID)}}" class="w-full border border-gray-400 rounded focus:border-indigo-400 mr-4" maxlength="10">
      </div>

      <div class="inline-flex py-8 px-4 items-center justify-between">
            <label for="Autorizado">Autorización</label>
            <input type="checkbox" name="Autorizado" id="Autorizado" class="border border-gray-400 rounded focus:border-indigo-400 ml-4" maxlength="10"
            @if ($atleta->Autorizado == 'true')
                checked                
            @endif>
      </div>
</div>

<div>
      <label for="Foto" class="block py-1">Foto</label>
      <input type="file" name="Foto" id="foto" value="{{old('Foto',$atleta->Foto)}}" class="w-full border border-gray-400 rounded focus:border-indigo-400">
</div>

<div class="flex justify-around mt-8">
      <input type="submit" value="{{$btnText}}" class="px-5 py-2 bg-indigo-400 rounded">
      <a href="{{route('atletas.index')}}" class="px-5 py-2 rounded border border-indigo-400">Regresar</a>
</div>
