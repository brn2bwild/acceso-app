@extends('layout')
@section('title', 'Acceso App')

@section('content')
   <form action="{{route('atletas.store')}}" method="post" enctype="multipart/form-data">
      @include('atletas._form',['btnText' => 'Guardar datos'])
   </form> 
@endsection
