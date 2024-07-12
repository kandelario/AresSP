<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Clientes:') !!}
    {{-- {!! Form::number('cliente_id', null, ['class' => 'form-control', 'required']) !!} --}}
    <select name="cliente_id" id="cliente_id" class="form-control">
        @if (isset($clientes))
            @foreach ($clientes as $cliente)
                <option value="{{$cliente['id']}}">{{$cliente['nombre']}}</option>
            @endforeach
        @else
            <option value="">No existen clientes</option>
        @endif
    </select>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {{-- {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!} --}}
    <select name="cliente_id" id="cliente_id" class="form-control">
        @if (isset($personals))
            @foreach ($personals as $personal)
                <option value="{{$personal['id']}}">{{$personal['name']}}</option>
            @endforeach
        @else
            <option value="">No existe Personal</option>
        @endif
    </select>
</div>

<!-- Fecha Inicio Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio_serv', 'Fecha Inicio Serv:') !!}
    {!! Form::text('fecha_inicio_serv', null, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        // $('#fecha_inicio_serv').datepicker()
        $('#fecha_inicio_serv').datepicker({
            format: 'DD-MM-YYYY',
            useCurrent: true,
            defaultDate: {{ $fecha_inicio_serv ?? false }}
        });
    </script>
@endpush

<!-- Enable Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!}
    </div>
</div>
