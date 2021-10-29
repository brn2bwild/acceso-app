@csrf
<div>
      <label for="nombreDispositivo" class="block py-1">Nombre del dispositivo</label>
      <input type="text" name="nombreDispositivo" id="nombreDispositivo" value="{{old('nombreDispositivo',$dispositivo->nombreDispositivo)}}" class="w-full border border-gray-400 rounded focus:border-indigo-400">
</div>

<div>
      <label for="MAC" class="block py-1">MAC</label>
      <input type="text" name="MAC" id="MAC" value="{{old('MAC',$dispositivo->MAC)}}" class="w-full border border-gray-400 rounded focus:border-indigo-400">
</div>

<div class="flex justify-around mt-8">
      <input type="submit" value="{{$btnText}}" class="px-5 py-2 bg-indigo-400 rounded">
      <a href="{{route('dispositivos.index')}}" class="px-5 py-2 rounded border border-indigo-400">Regresar</a>
</div>
