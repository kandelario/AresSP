<form action="{{url('clientes')}}" method="post" enctype="multipart/form-data" class="form">
{{ csrf_field() }}
<input type="text" name="nombre" id="nombre">
<input type="submit" value="Agregar">
</form>