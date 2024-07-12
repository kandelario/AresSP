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
    <p>
        @if($inventario->image)
            <img src="{{asset('assets/inventary_imgs/' . $inventario->image)}}" alt="" style="width: auto; height: auto;max-width: 100px; max-height: 100px;">
        @else
            <img src="{{asset('assets/inventary_imgs/default.webp')}}" alt="" style="width: auto; height: auto;max-width: 100px; max-height: 100px;">
        @endif
    </p>
</div>

