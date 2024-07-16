<!-- Salida Field -->
<div class="col-sm-3 text-center">
    {!! Form::label('salida', 'Salida:') !!}
    <p class="text-center">{{ $movimientos->salida }}</p>
</div>

<!-- Itemid Field -->
<div class="col-sm-3 text-center">
    {!! Form::label('itemID', 'Item:') !!}
    <p class="text-center">
    @foreach ($inventarios as $item)
        @if ($item->id == $movimientos->itemID)
            {{ $item->nombre }}
        @endif
    @endforeach
    </p>
</div>

<div class="col-sm-3 text-center">
    {!! Form::label('salida', 'Quien realizó la salida:') !!}
    @foreach ($usuarios as $usuario)
        @if ($usuario->id == $movimientos->userID)
            <p class="text-center">{{$usuario->name}}</p>
        @endif    
    @endforeach
</div>

<div class="col-sm-3 text-center">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    <p class="text-center">
        @if ($movimientos->observaciones != "")
            {{$movimientos->observaciones}}
        @else
            {{'N/A'}}
        @endif
    </p>
</div>