@extends('layout')

@section('title', 'Registros')

@section('content')
   <div class="container w-full md:w-4/5 xl:w-4/5 mx-auto px-2">
      <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">Registros</h1>
      <div id="recipients" class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
         <table id="registros" class="stripe hover" style="width:100%; padding-top:1em; padding-bottom:1em">
            <thead>
               <tr class="bg-indigo-400 bg-opacity-100 text-white">
                  <th data-priority="1" class="w-1/5">Nombre</th>
                  <th data-priority="2" class="w-1/5">Apellido Paterno</th>
                  <th data-priority="3" class="w-1/5">Apellido Materno</th>
                  <th data-priority="4" class="w-1/5">Hora Acceso</th>
                  <th data-priority="5" class="w-1/5">Lugar</th>
               </tr>
            </thead>
            <tbody>
               @forelse ($registros as $registro)
                  <tr>
                     <td>{{$registro->Nombre}}</td>
                     <td>{{$registro->apellidoPaterno}}</td>
                     <td>{{$registro->apellidoMaterno}}</td>
                     <td>{{$registro->horaAcceso}}</td>
                     <td>{{$registro->lugarAcceso}}</td>
                  </tr>
               @empty
                   
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
      $('#registros').DataTable({
         "lengthChange": false,
         responsive: true,
      }).columns.adjust()
      .responsive.recalc();
   });
</script>