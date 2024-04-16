<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $assignment->name }}</p>
</div>

<!-- Fecha Inicio Serv Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_inicio_serv', 'Fecha Inicio Serv:') !!}
    <p>{{ $assignment->fecha_inicio_serv }}</p>
</div>

<!-- Enable Field -->
<div class="col-sm-12">
    {!! Form::label('enable', 'Enable:') !!}
    <p>{{ $assignment->enable }}</p>
</div>

<!-- Cliente Id Field -->
<div class="col-sm-12">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    <p>{{ $assignment->cliente_id }}</p>
</div>

