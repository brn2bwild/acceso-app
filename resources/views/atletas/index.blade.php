@extends('layout')

@section('title', 'Atletas')
    
@section('content')
   <div class="container w-full md:w-4/5 xl:w-4/5 mx-auto px-2">
      {{-- <div class="bg-green-400 bg-opacity-100 text-gray-100 text-center"><p class="text-xl">Datatables - Tailwind</p></div> --}}
      <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">Atletas registrados</h1>
      <div id="recipients" class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
         <a class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded" href="{{route('atletas.create')}}">Agregar</a>
         <table id="atletas" class="stripe hover" style="width:100%; padding-top:1em; padding-bottom:1em">
            <thead class="bg-green-200">
               <tr class="bg-indigo-400 bg-opacity-100 text-white">
                  {{-- <th class="w-1/6">#</th> --}}
                  {{-- <th data-priority="1" class="w-1/6">Foto</th> --}}
                  <th data-priority="1" class="w-1/6">Nombre</th>
                  <th data-priority="2" class="w-1/6">Apellido Paterno</th>
                  <th data-priority="3" class="w-1/6">Apellido Materno</th>
                  <th data-priority="4" class="w-1/6">Correo</th>
                  <th data-priority="5" class="w-1/6">Autorizado</th>
                  <th data-priority="6" class="w-1/6">Acciones</th>
               </tr>
            </thead>
            <tbody>
               @forelse ($atletas as $atleta)
                  <tr>

                     {{-- <td>{{$atleta->id}}</td> --}}
                     {{-- <td>
                        <img src="{{asset('storage').'/'.$atleta->Foto}}" width="100" alt="">
                     </td> --}}
                     <td>{{$atleta->Nombre}}</td>
                     <td>{{$atleta->apellidoMaterno}}</td>
                     <td>{{$atleta->apellidoPaterno}}</td>
                     <td>{{$atleta->Correo}}</td>
                     <td>{{$atleta->Autorizado}}</td>
                     <td class="justify-items-center">
                        <div class="flex items-center justify-items-center">
                           <a class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold rounded py-2 px-2 mr-2" href="{{route('atletas.edit', $atleta)}}">
                              <button class="bg-gray-light hover:bg-gray text-gray-darkest font-bold rounded inline-flex items-center">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg>
                              </button>
                           </a>
                           <form class="flex items-center m-0" action="{{route('atletas.destroy', $atleta)}}" method="POST" id="delete-atletas">
                              @csrf @method('DELETE')  
                              <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold rounded py-2 px-2" type="submit" onclick="return confirm('¿Deseas borrar el registro?')" value="Eliminar"> 
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                 </svg>
                              </button>           
                           </form> 
                        </div>
                     </td>
                  </tr>
               @empty
                  <h1>No hay registros para mostrar</h1>
               @endforelse
            </tbody>
         </table>
      </div>
   </div>
@endsection


<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>		
<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
   $(document).ready(function(){
      $('#atletas').DataTable({
         "lengthChange": false,
         responsive: true,
      }).columns.adjust()
      .responsive.recalc();
   });
</script>

   