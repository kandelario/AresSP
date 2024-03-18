<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $inventario->nombre }}</p>
</div>

<!-- Existencia Field -->
<div class="col-sm-12">
    {!! Form::label('existencia', 'Existencia:') !!}
    <p>{{ $inventario->existencia }}</p>
</div>

<!-- Imagen Field -->
<div class="col-sm-12">
    {!! Form::label('imagen', 'Imagen:') !!}
    <p>{{ $inventario->imagen }}</p>
</div>

