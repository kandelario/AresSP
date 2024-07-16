<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Clientes:') !!}
    {{-- {!! Form::number('cliente_id', null, ['class' => 'form-control', 'required']) !!} --}}
    <select name="cliente_id" id="cliente_id" class="form-control">
        @if (isset($clientes) && count($clientes) > 0)
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
    {!! Form::label('name', 'Nombre del personal:') !!}
    {{-- {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!} --}}
    <select name="name" id="name" class="form-control">
        @if (isset($personals) && count($personals) > 0)
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
    {!! Form::date('fecha_inicio_serv', null, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('puesto', 'Ingresa el puesto a desempeñar:') !!}
    @if (isset($asignacion) && count($asignacion) > 0)
        {!! Form::text('puesto', $asignacion->puesto, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
    @else
        {!! Form::text('puesto', null, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
    @endif
    
</div>

<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    @if (isset($asignacion) && count($asignacion) > 0)
        {!! Form::text('observaciones', $asignacion->observaciones, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
    @else
        {!! Form::text('observaciones', null, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
    @endif
</div>

<!-- Enable Field -->
{{-- <div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!}
    </div>
</div> --}}
