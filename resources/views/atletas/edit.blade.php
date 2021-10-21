<form action="{{route('atletas.update', $atleta)}}" method="POST" enctype="multipart/form-data">
   @method('PATCH')
   @include('atletas._form',['btnText' => 'Actualizar'])
</form>