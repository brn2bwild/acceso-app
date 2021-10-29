@extends('layout')
@section('title', 'Acceso App')

@section('content')
   <div class="flex h-screen items-center justify-center bg-gray-200">
      <div class="bg-white p-8 rounded shadow w-1/2">
         <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-4 text-xl md:text-2xl mb-4">Ingresar Atleta</h1>
         <form action="{{route('atletas.store')}}" method="POST" enctype="multipart/form-data">
            @include('atletas._form',['btnText' => 'Guardar datos'])
         </form> 
      </div>
   </div>
@endsection
