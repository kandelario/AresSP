{{-- <!-- Entrada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entrada', 'Entrada:') !!}
    {!! Form::number('entrada', null, ['class' => 'form-control', 'required']) !!}
</div> --}}

<!-- Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salida', 'Cantidad:') !!}
    {!! Form::number('salida', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Itemid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('itemID', 'Item:') !!}
    {{-- {!! Form::number('itemID', null, ['class' => 'form-control', 'required']) !!} --}}
    <select name="itemID" id="itemID" class="form-control">
        @if (isset($inventarios))
            @foreach ($inventarios as $item)
                <option value="{{$item['id']}}">
                    {{$item['nombre'] . ' (' . $item['existencia'] . ')'}}
                    {{-- @if($item->image)
                        <img src="{{asset('assets/inventary_imgs/' . $item->image)}}" alt="" style="width: auto; height: auto;max-width: 20px; max-height: 20px;">
                    @else
                        <img src="{{asset('assets/inventary_imgs/default.webp')}}" alt="" style="width: auto; height: auto;max-width: 20px; max-height: 20px;">
                    @endif --}}
                </option>
            @endforeach
        @else
            <option value="">No existen materiales registrados en el almacén</option>
        @endif
    </select>
</div>