<!-- Entrada Field -->
{{-- <div class="form-group col-sm-6"> --}}
    {{-- {!! Form::label('entrada', 'Entrada:') !!} --}}
    {!! Form::hidden('entrada', 0, ['class' => 'form-control', 'required']) !!}
    {!! Form::hidden('userID', Auth::user()->id, ['class' => 'form-control']) !!}
{{-- </div> --}}

<!-- Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salida', 'Cantidad:') !!}
    @if (isset($salida->salida) && $salida->salida != '')
        {!! Form::number('salida', $salida->salida, ['class' => 'form-control', 'required', 'min' => 1]) !!}
    @else
        {!! Form::number('salida', 0, ['class' => 'form-control', 'required', 'min' => 1]) !!}
    @endif
    
</div>

<!-- Itemid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('itemID', 'Item:') !!}
    {{-- {!! Form::number('itemID', null, ['class' => 'form-control', 'required']) !!} --}}
    <select name="itemID" id="itemID" class="form-control">
        @if (isset($item))
            @if (isset($salida))
                @if ($salida->itemID == $item->id)
                    <option value="{{$item->id}}" selected>
                        {{$item->nombre . ' (' . $item->existencia . ')'}}
                    </option> 
                @else
                    <option value="{{$item->id}}">
                        {{$item->nombre . ' (' . $item->existencia . ')'}}
                    </option>
                @endif
            @else
                <option value="{{$item->id}}">
                    {{$item->nombre . ' (' . $item->existencia . ')'}}
                </option>
            @endif
                    
                {{-- <option value="{{$item['id']}}">
                    {{$item['nombre'] . ' (' . $item['existencia'] . ')'}}
                </option> --}}
        @else
            <option value="">No existen materiales registrados en el almacén</option>
        @endif
    </select>
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    @if (isset($salida->observaciones) && $salida->observaciones != '')
        {!! Form::number('observaciones', $salida->observaciones, ['class' => 'form-control', 'required', 'min' => 1]) !!}
    @else
        {!! Form::text('observaciones', null, ['class' => 'form-control', 'required', 'min' => 1]) !!}
    @endif
    
</div>
<script>
    
    document.getElementById('itemID').addEventListener('change', (event) => {
        var texto = event.target.querySelector('option:checked').textContent;
        var corte1 = texto.split('(');
        var corte2 = corte1[1].split(')');

        var _cantidad = document.getElementById('salida');
        _cantidad.max = corte2[0];
    });
</script>